<?php

class homeActions extends sfActions
{
    /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */

    public function executeIndex(sfWebRequest $request)
    {

        //guardo el id en una varibale para enviarsela a la vista y comparar el mismo con el campo rol_user_id(fireign key) de la tabla roles_categoria
        //$this->user_id = $this->getUser()->getGuardUser()->getId();
        
        //guardo el nombre y apellido completo a la vista guardada en sesiones para ver quien se logueo
        //$this->getUser()->setAttribute('full_name', $this->getUser()->getGuardUser()->getFirstName()." ".$this->getUser()->getGuardUser()->getLastName());
        //guardo el email del usuario logueado
        //$this->getUser()->setAttribute('user_email', $this->getUser()->getGuardUser()->getEmailAddress());

        //envio la data de las categorias y los botones filtrando por los roles segun el usuario e imprimir solo la info disponible para ese usuario
        //$this->rol_cat = Doctrine_Core::getTable('roles_categorias')->findAll();

        if(!is_object($this->getUser()->getGuardUser()->getGroups()->getFirst())){
            $this->msg = 'No se te asignaron los permisos necesarios para ver la información, consulte con el Administrador.';
        }else{
            $rol_id = $this->getUser()->getGuardUser()->getGroups()->getFirst()->getId();
            $user_id = $this->getUser()->getGuardUser()->getId();
            //$this->categorias = $this->getUser()->getGuardUser()->getGroups()->getFirst()->getCategorias();
            $this->favoritos = Doctrine::getTable('Botones')->getInstance()->getFavoritos($rol_id, $user_id);
            $this->categorias = Doctrine::getTable('Categorias')->getInstance()->getNoFavoritos($rol_id);
            //esta query solo me trae el total de los botones favoritos
            $this->totalFavoritos = Doctrine::getTable('Botones')->getInstance()->getTotalFavoritos($rol_id, $user_id);
            $this->noticias = Doctrine_Core::getTable('Noticias')->getInstance()->getNoticias();
            $this->totalNoticias = Doctrine_Core::getTable('Noticias')->getInstance()->getTotalNoticias();
            $this->servicios = Doctrine_Core::getTable('Servicios')->findAll();
        }
        
    }

    public function executeAgregarFavoritos(sfWebRequest $request){
            
        $user_id = $this->getUser()->getGuardUser()->getId();
        $boton_id = $request->getParameter('boton_id');
        $sacarDeFavorito = $request->getParameter('remover', false);

        $obj = Doctrine::getTable('BotonesFavoritos')->createQuery()
                ->where('bf_user_id = ? and bf_btn_id = ?', array($user_id, $boton_id))
                ->fetchOne();

        if ($sacarDeFavorito) {
            //Si lo tengo que sacar de favorito lo borro si existe
            if ($obj) {
                $obj->delete();
                return $this->renderText(json_encode(array('status' => true)));
            }

        }else{
            //si lo tengo y existe entonces lo tengo que agregar
            if (!$obj) {
                $obj = new BotonesFavoritos();
                $obj->bf_user_id = $user_id;
                $obj->bf_btn_id = $boton_id;
                $obj->save();

                $btn_agregado = Doctrine::getTable('Botones')
                                    ->createQuery()
                                    ->where('id = ?', $boton_id)
                                    ->fetchOne();

                return $this->renderText(json_encode($btn_agregado->toArray()));
            }

        }
        
        //$rol_id = $request->getParameter("rol_user_id");
        /*Doctrine_Query::create()
                            ->update('Botones')
                            ->set('btn_favorito', '?', '1')
                            ->where('id = ?', $boton_id)
                            ->execute();

        /*$result = Doctrine_Query::create()
                                  ->select('id, btn_nombre, btn_imagen, btn_link')
                                  ->from('Botones')
                                  ->where('id = ?', $boton_id)
                                  //->limit(1)
                                  ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
                                  //->execute();*/
        //$this->result = $this->getBotonAgregado($boton_id);
        //if($request->isXmlHttpRequest()){
            //return  new Response(json_encode($result), 200, array('Content-Type', 'text/json'));
            //$this->getResponse()->setContent($result);
            //return sfView::NONE;
        
        
        //}

    }

    /*public function getBotonAgregado($id_ultimo_boton){
        $result = Doctrine_Query::create()
                  ->select('id, btn_nombre, btn_imagen, btn_link')
                  ->from('Botones')
                  ->where('id = ?', $id_ultimo_boton)
                  //->limit(1)
                  ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
        return $result;
    }*/

    /*public function executeQuitarFavoritos(sfWebRequest $request){
        if($request->isXmlHttpRequest()){

            $user_id = $request->getParameter('user_id');
            $boton_id = $request->getParameter('boton_id');
            
            //$rol_id = $request->getParameter("rol_user_id");
            $q = Doctrine_Query::create()
                                ->update('Botones')
                                ->set('btn_favorito', '?', '0')
                                ->where('id = ?', $boton_id)
                                ->execute();

            $q = Doctrine_Query::create()
                                ->delete('BotonesFavoritos')
                                ->where('bf_btn_id', $boton_id)
                                ->execute();
            die();
        }
    }*/
    
}