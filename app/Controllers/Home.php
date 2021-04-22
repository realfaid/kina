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

				public function pridat_sal(){
					$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
					if(!$this->ionAuth->loggedIn())echo view('head');
					else echo view('headprihlaseny');
					echo view('pridat_sal');
					
					}

					public function pridat_vstupenku(){
						$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
						if(!$this->ionAuth->loggedIn())echo view('head');
						else echo view('headprihlaseny');
						echo view('pridat_vstupenku');
						
						}


			public function zapsat(){
				$filmy = new VypisFilmuModel();
				$data = [
					'nazev_cz' => $this->request->getPost('nazev_cz'),
					'originalni_nazev' => $this->request->getPost('originalni_nazev'),
					'delka' => $this->request->getPost('delka'),

					'id_zanru_filmu' => $this->request->getPost('id_zanru_filmu'),
					'zeme_id_zeme' => $this->request->getPost('zeme_id_zeme'),
					'id_promitani' => $this->request->getPost('id_promitani'),


				];
				$filmy->save($data);
				return redirect()->to(base_url('vypis_filmu'));
			}


			public function zapsatSal(){
				$saly = new VypisSaluModel();
				$data = [
					'cislo_salu' => $this->request->getPost('cislo_salu'),
					'typ_promitani' => $this->request->getPost('typ_promitani'),
					'typ_ozvuceni' => $this->request->getPost('typ_ozvuceni'),


				];
				$saly->save($data);
				return redirect()->to(base_url('vypis_salu'));
			}

			public function zapsatVstupenku(){
				$vstupenky = new VypisVstupenekModel();
				$data = [
					'cas_prodeje' => $this->request->getPost('cas_prodeje'),
					'cena_vstupenky' => $this->request->getPost('cena_vstupenky'),
					'misto_v_sale' => $this->request->getPost('misto_v_sale'),
					'id_salu_id' => $this->request->getPost('id_salu_id'),



				];
				$vstupenky->save($data);
				return redirect()->to(base_url('vypis_vstupenek'));
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
			public function upravaVstupenky($id = null){
				$vstupenky = new VypisVstupenekModel();
				$data['prodeje'] = $vstupenky->find($id);
				$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
				if(!$this->ionAuth->loggedIn())echo view('head');
				else echo view('headprihlaseny');
				return view('upravaVstupenky', $data);
			}


			public function zapsatUpravu($id = null){
				$filmy = new VypisFilmuModel();
				$data = [
					'nazev_cz' => $this->request->getPost('nazev_cz'),
					'originalni_nazev' => $this->request->getPost('originalni_nazev'),
					'delka' => $this->request->getPost('delka'),

					'id_zanru_filmu' => $this->request->getPost('id_zanru_filmu'),
					'zeme_id_zeme' => $this->request->getPost('zeme_id_zeme'),
					'id_promitani' => $this->request->getPost('id_promitani'),

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

			public function zapsatUpravuVstupenky($id = null){
				$vstupenky = new VypisVstupenekModel();
				$data = [
					'cas_prodeje' => $this->request->getPost('cas_prodeje'),
					'cena_vstupenky' => $this->request->getPost('cena_vstupenky'),
					'misto_v_sale' => $this->request->getPost('misto_v_sale'),
					'id_salu_id' => $this->request->getPost('id_salu_id'),



				];
				$vstupenky->update($id, $data);
				return redirect()->to(base_url('vypis_vstupenek'));
			}


			public function smazat($id = null){
				$filmy = new VypisFilmuModel();
				$filmy->delete($id);
				return redirect()->to(base_url('vypis_filmu'));
			}
	
			public function smazatSal($id = null){
				$saly = new VypisSaluModel();
				$saly->delete($id);
				return redirect()->to(base_url('vypis_salu'));
			}
	
			public function smazatVstupenku($id = null){
				$vstupenky = new VypisVstupenekModel();
				$vstupenky->delete($id);
				return redirect()->to(base_url('vypis_vstupenek'));
			}
		}

?>