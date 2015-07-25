<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Frontend
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');

        $this->data['config'] = array();

        $this->data['config']['full_tag_open'] = '<ul class="pagination">';
        $this->data['config']['full_tag_close'] = '</ul>';
        $this->data['config']['cur_tag_open'] = '<li class="active"><a>';
        $this->data['config']['cur_tag_close'] = '</a></li>';
        $this->data['config']['next_tag_open'] = '<li>';
        $this->data['config']['next_tag_close'] = '</li>';
        $this->data['config']['prev_tag_open'] = '<li>';
        $this->data['config']['prev_tag_close'] = '</li>';
        $this->data['config']['num_tag_open'] = '<li>';
        $this->data['config']['num_tag_close'] = '</li>';

        $this->data['config']["per_page"] = 20;
        $this->data['config']["uri_segment"] = 2;
        $this->data['config']["use_page_numbers"] = TRUE;
    }

    public function index($page = 0)
    {

        $this->data['config']["base_url"] = site_url('products');
        $this->data['config']["total_rows"] = $this->product_model->record_count();

        $choice = $this->data['config']["total_rows"] / $this->data['config']["per_page"];
        $this->data['config']["num_links"] = round($choice);

        $this->pagination->initialize($this->data['config']);

        $this->data['products'] = $this->product_model->fetch_products($this->data['config']["per_page"], $page);
        $this->data['links'] = $this->pagination->create_links();

        $this->load->view('partials/header', $this->data);
        $this->load->view('products', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function category($id, $page = 0)
    {

        $this->data['config']["base_url"] = site_url('products');
        $this->data['config']["total_rows"] = $this->product_model->record_count();

        $choice = $this->data['config']["total_rows"] / $this->data['config']["per_page"];
        $this->data['config']["num_links"] = round($choice);

        $this->pagination->initialize($this->data['config']);


        $this->data['products'] = $this->product_model->get_data_by_category($id);
        $this->data['links'] = $this->pagination->create_links();

        $this->load->view('partials/header', $this->data);
        $this->load->view('products', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function product($id)
    {
        $this->data['product'] = $this->product_model->get_data_by_id($id);

        $this->product_model->update_views($id);

        $this->load->view('partials/header', $this->data);
        $this->load->view('product', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function success()
    {
        $this->load->view('partials/header', $this->data);
        $this->load->view('success', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function checkout()
    {
        if (!empty($_POST)) {
            $products = $this->input->post('products');

            $prefer = $this->input->post('prefer');

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telephone = $this->input->post('telephone');
            $address = $this->input->post('address');
            $message = $this->input->post('message');

            if (!empty($products) && !empty($email) && !empty($telephone) && !empty($name)) {
                $this->load->library('email');

                $order_array = [];

                // Procesarea contentului
                $content = 'Comanda de pe site de le ' . $name . "\n";
                $content .= 'Email: ' . $email . "\n";
                $content .= 'Telefon: ' . $telephone . "\n";
                $content .= 'Adresa: ' . $address . "\n\n";
                $content .= 'Mesaj: ' . $message . "\n\n";
                if (!empty($prefer)) $content .= 'Prefera sa fie contactat prin: ' . implode(', ', $prefer) . "\n\n";

                $content .= "\nComanda: \n\n";
                $total = 0;
                foreach ($products as $id => $product) {
                    $product_db = $this->product_model->get_data_by_id($id);
                    $product_total = $product_db->price * intval($product['quantity']);
                    $content .= $product_db->name . ' x ' . $product['quantity'] . ' = ' . $product_total . " Lei \n";
                    $total += $product_total;
                    $order_array['products'][] = ['id' => $id, 'name' => $product_db->name, 'quantity' => $product['quantity'], 'total' => $product_total];
                }
                $content .= "\nTotal: " . $total . ' Lei';

                $order_array['prefer'] = $prefer;
                $order_array['name'] = $name;
                $order_array['email'] = $email;
                $order_array['telephone'] = $telephone;
                $order_array['address'] = $address;
                $order_array['message'] = $message;
                $order_array['content'] = $content;
                $order_array['total'] = $total;
                // Finisare


                $this->email->from($email, $name);
                $this->email->to('ser.finciuc@gmail.com');
                /*$this->email->cc('another@another-example.com');
                $this->email->bcc('them@their-example.com');*/

                $this->email->subject('Comanda de pe site.');
                $this->email->message($content);

                if ($this->email->send()) {
                    delete_cookie('products');

                    $this->order_model->insert_order($order_array);

                    redirect('success');
                } else {
                    $this->session->set_flashdata('error', 'Mesajul dumneavoastra nu a fost trimit. Va rugam incercati mai tirziu.');
                    $this->cart();
                }
            } else {
                $this->session->set_flashdata('error', 'Va rugam verificati din nou toate datele sa fie complete.');
                $this->cart();
            }
        } else {
            redirect('cart');
        }

    }

    public function cart()
    {
        $this->data['products'] = array();
        if (!empty($this->data['cart'])) {
            foreach ($this->data['cart'] as $id) {
                $product = $this->product_model->get_data_by_id($id);
                if (!empty($product)) {
                    $this->data['products'][] = $product;
                }
            }
        }

        $this->load->view('partials/header', $this->data);
        $this->load->view('cart', $this->data);
        $this->load->view('partials/footer', $this->data);
    }
}
