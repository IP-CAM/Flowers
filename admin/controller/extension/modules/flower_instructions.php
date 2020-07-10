<?php
class ControllerExtensionModulesFlowerinstructions extends Controller
{

	/**
	 * index
	 * Envoit les données à la vue de la page de l'extension
	 * @return void
	 */
	public function index()
	{
		$this->load->language('extension/modules/flower_instructions');
		$this->document->setTitle($this->language->get('heading_title'));

		$data['instructions'] = $this->language->get('text_instructions');
		$data['about'] = $this->language->get('text_about');

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/modules/flower_instructions', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['cancel'] = $this->url->link('marketplace/flower_instructions', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/modules/flower_instructions', $data));
	}

	/**
	 * install
	 * Installation de l'extension (création de la table 'flowerinstructions')
	 * @return void
	 */
	public function install()
	{
		$this->load->model('extension/modules/flowerinstructions');
		$this->model_extension_modules_flowerinstructions->createTable();
	}


	/**
	 * uninstall
	 * Désinstallation de l'extension (suppression de la table 'flowerinstructions')
	 * @return void
	 */
	public function uninstall()
	{
		$this->load->model('extension/modules/flowerinstructions');
		$this->model_extension_modules_flowerinstructions->dropTable();
	}
}
