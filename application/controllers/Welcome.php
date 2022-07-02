<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(!$this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/Connexion'));
        }
		$data=array();
		$data['vue']='dashboard.php';
		$data["anne"]=date('Y');
		$data["mois"]=array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');
		if( isset($_GET['mois']) && isset($_GET['anne']) ) {
			$requete="SELECT dashboard.id, dashboard.nom, dashboard.idpack, (select count(*) from client where admin=dashboard.id and pack=dashboard.idpack ) as n "
				." FROM"
				." dashboard"   
				." where year(date_ajout)='%s' and month(date_ajout)='%s' "
				." group by id,idpack"
				." order by id,nom desc"; 
			$requete=sprintf($requete,$this->input->get('anne'),$this->input->get('mois'));
		} else {
			$requete="SELECT dashboard.id, dashboard.nom, dashboard.idpack, (select count(*) from client where admin=dashboard.id and pack=dashboard.idpack ) as n "
				." FROM"
				." dashboard"   
				." group by id,idpack"
				." order by id,nom desc";
		}
		$query = $this->db->query($requete);
        $row = $query->result_array();
		$data["dashboard"]=$row;
		$req="with p as ( %s ) select id,nom from p group by id;";
		$req=sprintf($req,$requete); 
		$query = $this->db->query($req);
		$row = $query->result_array();
		$data["dashboard_id"]=$row;
		$this->load->view('welcome_message',$data);
	}
	public function Liste()
	{
		if(!$this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/Connexion'));
        }
		$data=array();
		$data['vue']='liste.php';
		/*GET HISTORIQUE */
		$requete = "SELECT id, nom, prenom, pack FROM historique;"; 
        $query = $this->db->query($requete);
        $row = $query->result_array();
		$data["historique"]=$row;
		/* */
		$this->load->view('welcome_message',$data);
	}
	public function Nouveau()
	{
		if(!$this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/Connexion'));
        }
		$data=array();
		/*GET PACKAGE*/
		$requete = "SELECT id, nom FROM pack k;"; 
        $query = $this->db->query($requete);
        $row = $query->result_array();
		$data["packages"]=$row;
		/**/
		$data['vue']='nouveau.php';
		$this->load->view('welcome_message',$data);
	} 


	//POST
	public function NouveauClient() {
		if(!$this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/Connexion'));
        }
		$this->db->trans_begin();
		$pack=$this->input->post('pack');
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$ddn=$this->input->post('ddn');
		$cin=$this->input->post('cin');
		$mail=$this->input->post('mail');
		$tel=$this->input->post('tel'); 
		$admin=1;
		$date=$this->input->post('date');
		/*INSERT IN TABLE CLIENT*/
		$requete ="INSERT INTO client ( nom, prenom, ddn, cin, mail, tel, admin, pack, date_ajout) "
		." VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s');";
		$requete=sprintf($requete,$nom,$prenom,$ddn,$cin,$mail,$tel,$admin,$pack,$date);
		$this->db->query($requete);
		/**/
		$this->db->trans_commit();
		redirect(site_url_spx('welcome/Liste?suucess=1&'.$requete));
	} 

	public function Delete() {
		if(!$this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/Connexion'));
        }
		$this->db->trans_begin();
		$id=$this->input->get('id');
		$requete ="DELETE FROM client where id='%s'";
		$requete=sprintf($requete,$id); 
		$this->db->query($requete);
		$this->db->trans_commit();
		redirect(site_url_spx('welcome/Liste?suucess=1&'));
	}

	public function Deconnexion() { 
		session_destroy();
		redirect(site_url_spx('welcome/Connexion'));
	}
	public function Connexion() { 
		$this->load->view('Connexion');
	}

	public function login() {
		if($this->session->has_userdata('user')){
            redirect(site_url_spx('welcome/index'));
        }
		$identifiant=$this->input->post('identifiant');
		$mdp=$this->input->post('mdp');
		$requete ="SELECT id, nom, prenom, identifiant, mdp FROM admin n where identifiant='%s' and mdp=sha1('%s')";
		$requete=sprintf($requete,$identifiant,$mdp);
		$query = $this->db->query($requete); 
		if(count($query)==1) { 
			$row = $query->row_array();
			$this->session->set_userdata('user',$row);
			redirect(site_url_spx('welcome/index'));
		} else {
			redirect(site_url_spx('welcome/Connexion'));
		}
	}
}
