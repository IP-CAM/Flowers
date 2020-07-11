<?php
class ControllerInformationInstructions extends Controller
{
    public function index()
    {
        $this->language->load('information/instructions');
        $this->load->model('catalog/instructions');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('common/home')
        );

        $all_instructions = $this->model_catalog_instructions->getAllInstructions();

        $data['all_instructions'] = array();
        foreach ($all_instructions as $instructions) {
            $data['all_instructions'][] = array(
                'flower' => $instructions['flower_type'],
                'instructions' => $instructions['flower_instruction']
            );
        }

        $this->document->setTitle($this->language->get('heading_title'));

        $data['heading_title'] = $this->language->get('heading_title');
        $data['flower'] = $this->language->get('text_flower');
        $data['text_instructions'] = $this->language->get('text_instructions');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/instructions', $data));    
    }
}