<?php

namespace App\Controllers;


use App\Models\VypisFilmuModel;
use App\Models\VypisSaluModel;
use App\Models\VypisVstupenekModel;



class Home extends BaseController
{

	
	public function index()
	{
		$filmy = new VypisFilmuModel();
		$data['filmy'] = $filmy->findAll();
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		echo view('uvod');
	}

	public function vypis_filmu(){
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		$filmy = new VypisFilmuModel();
		$data['filmy'] = $filmy->findAll();
		echo view('vypis_filmu', $data);
	
		}


	public function vypis_salu(){
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('head');
		else echo view('headprihlaseny');
		$saly = new VypisSaluModel();
		$data['saly'] = $saly->findAll();
		echo view('vypis_salu', $data);
		
		}

		public function vypis_vstupenek(){
			$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
			if(!$this->ionAuth->loggedIn())echo view('head');
			else echo view('headprihlaseny');
			$prodeje = new VypisVstupenekModel();
			$data['prodeje'] = $prodeje->findAll();
			echo view('vypis_vstupenky', $data);
			
			}


			public function pridat_film(){
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('headprihlaseny');
				echo view('pridat_film');
				
				}


			public function zapsat(){
				$filmy = new VypisFilmuModel();
				$data = [
					'nazev_cz' => $this->request->getPost('nazev_cz'),
					'originalni_nazev' => $this->request->getPost('originalni_nazev'),
					'delka' => $this->request->getPost('delka'),
					'id_typu_filmu' => $this->request->getPost('id_typu_filmu'),
					'id_zanru_filmu' => $this->request->getPost('id_zanru_filmu'),


				];
				$filmy->save($data);
				return redirect()->to(base_url('vypis_filmu'));
			}

			public function uprava($id = null){
				$filmy = new VypisFilmuModel();
				$data['filmy'] = $filmy->find($id);
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('headprihlaseny');
				return view('uprava', $data);
			}

			public function upravaSalu($id = null){
				$saly = new VypisSaluModel();
				$data['saly'] = $saly->find($id);
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('headprihlaseny');
				return view('upravaSalu', $data);
			}

			public function zapsatUpravu($id = null){
				$filmy = new VypisFilmuModel();
				$data = [
					'nazev_cz' => $this->request->getPost('nazev_cz'),
					'originalni_nazev' => $this->request->getPost('originalni_nazev'),
					'delka' => $this->request->getPost('delka'),
					'id_typu_filmu' => $this->request->getPost('id_typu_filmu'),
					'id_zanru_filmu' => $this->request->getPost('id_zanru_filmu'),


				];
				$filmy->update($id, $data);
				return redirect()->to(base_url('vypis_filmu'));
			}

			public function zapsatUpravuSalu($id = null){
				$saly = new VypisSaluModel();
				$data = [
					'cislo_salu' => $this->request->getPost('cislo_salu'),
					'typ_promitani' => $this->request->getPost('typ_promitani'),
					'typ_ozvuceni' => $this->request->getPost('typ_ozvuceni'),


				];
				$saly->update($id, $data);
				return redirect()->to(base_url('vypis_salu'));
			}


			public function smazat($id = null){
				$filmy = new VypisFilmuModel();
				$filmy->delete($id);
				return redirect()->to(base_url('vypis_filmu'));
			}
	}

?>