<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Candidat extends CI_Controller
{
    //La fonction qui affiche la vue candidat
    public function index()
    {
        $this->load->view('front/candidat/inscription');
    }

    // la fonction qui réupere les donnees du formulaire
    public function traitement_enregistrement()
    {
        // On récupère les infos du formulaire
        $nom         = $this->input->post('nom');
        $prenom      = $this->input->post('prenom');
        $sexe        = $this->input->post('sexe');
        $date_n      = $this->input->post('date');
        $email       = $this->input->post('email');
        $num_tel     = $this->input->post('telephone');
        $num_what    = $this->input->post('num_what');
        $horaire     = $this->input->post('horaire');
        $domaine_act = $this->input->post('domaine');
        $type_serv   = $this->input->post('service');
        $attentes    = $this->input->post('attentes');

        // On valide les informations

        // On crée un candidat
        $candidat = new Candidat_model();

        $candidat->nom_prenom  = $nom . ' ' . $prenom;
        $candidat->num_tel     = $num_tel;
        $candidat->num_what    = $num_what;
        $candidat->email       = $email;
        $candidat->sexe        = $sexe;
        $candidat->date_n      = $date_n;
        $candidat->domaine_act = $domaine_act;
        $candidat->type_serv   = $type_serv;
        $candidat->attentes    = $attentes;
        $candidat->horaire     = $horaire;

        // On enregistre le candidat dans la base de données
        $succes = $candidat->s_enregistrer();

        // On le redirige en fonction du résultat de la requete
        if ($succes) {

            // On charge la vue du mail
            $message = $this->load->view('email/candidat/enregistrement', '', TRUE);

            $cles    = array('{GENRE}', '{NOM}', '{SEXE}', '{DATE}', '{EMAIL}', '{TEL}', '{WHATSAPP}', '{HEURE}', '{DOMAINE}', '{SERVICE}', '{ATTENNTES}');
            $valeurs = array(($candidat->sexe == 'F' ? 'Mme' : 'M'), $candidat->nom_prenom, $candidat->sexe, $candidat->date_n, $candidat->email, $candidat->num_tel, $candidat->num_what, $candidat->horaire, $candidat->domaine_act, $candidat->type_serv, $candidat->attentes);

            $message = str_replace($cles, $valeurs, $message);

            // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
            //$headers[] = 'MIME-Version: 1.0';
            //$headers[] = 'Content-type: text/html; charset=iso-8859-1';

            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            // On envoie un mail au candidat
            mail($candidat->email, 'Ecole 241 Business - Inscription', $message, $headers);

            redirect('candidat/inscription_reussi');
        } else {
            redirect('candidat');
        }
    }

    public function inscription_reussi()
    {
        $this->load->view('front/candidat/message_inscription');
    }
}
