<?php

 namespace App\Controllers;
 use CodeIgniter\Controller;
 
 class Pages extends Controller {
     
     public function index() {
         return view('welcome_message');
     }
     
        public function showme($page = 'home') {
            if(!is_file(APPPATH. '/Views/pages/'.$page.'.php') && (!is_file(APPPATH. '/model/'.$page.'.php'))){
                throw new PageNotFoundException($page);
            }
            
            $data['title'] = ucfirst($page);
            if($page == "index-dashboard"){
                echo view('templates/header-dashboard', $data);
                echo view('pages/'.$page, $data);
                echo view('templates/footer', $data);

            }
            
            else if($page == "Processo_usuario"){
                    echo view('templates/header', $data);
                    echo view('../model/'.$page, $data);
                    echo view('templates/footer', $data);
            }
            else if($page == "Processo_anuncio"){
                echo view('templates/header', $data);
                echo view('../model/'.$page, $data);
                echo view('templates/footer', $data);
            }
            else if($page == "login"){
                echo view('templates/header', $data);
                echo view('../model/'.$page, $data);
                echo view('templates/footer', $data);
            }
            else if($page == "Processo_soli"){
                echo view('templates/header', $data);
                echo view('../model/'.$page, $data);
                echo view('templates/footer', $data);
            }
            else if($page == "visualizarmodal"){
                echo view('templates/header', $data);
                echo view('../model/'.$page, $data);
                echo view('templates/footer', $data);
            }
            else if($page == "deslogar"){
                
                echo view('../model/'.$page, $data);
                
            }
            else{    
                echo view('templates/header', $data);
                echo view('pages/'.$page, $data);
                echo view('templates/footer', $data);
            }
        }
 }

