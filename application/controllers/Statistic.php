<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'controllers/Site.php');
class Statistic extends Site {

       public function index()
	{
      if ($this->data['session']['prava']=='admin' )
		{ 
                    redirect(base_url().'new', 'location');
                }          	
    if (!isset($this->data['session']['prava']) )
		{ 
                    redirect(base_url(), 'location');
                }
                

                $this->load->model('stat_model');
                $this->load->model('object_model');
                
                $fff= date('d.m.Y');

                 $fff= '08.08.2016';
                $gamer=$this->stat_model->ger($this->data['session']['nick'],$fff);
                
                        $table[1]['first']='Стол';
                        $table[2]['first']='Докупка';
                        $table[3]['first']='Время';//время
                        $table[10]['first']="Плата за время";//plata za vremiya
                        $table[4]['first']='Рейкбэк';//рекбек
                        $table[5]['first']='Выход из-за стола';//balance
                        $table[6]['first']='';//itog dokupok
                        
                        $table[11]['first']='Итог';//vvec itog
                
                foreach ($gamer as  $game) 
                {
                    if (!isset($table[1][$game->stol_name]))
                    {
                         $table[1][$game->stol_name]=$game->stol_name;
                         $table[2][$game->stol_name]='';
                         $table[3][$game->stol_name]=0;//время
                         $table[4][$game->stol_name]=0;//рекбек
                         $table[5][$game->stol_name]=0;//balance
                         $table[6][$game->stol_name]=0;//itog dokupok
                         $table[10][$game->stol_name]=0;//plata za vremiya
                         $table[11][$game->stol_name]=0;//vvec itog
                    }
                    $table[1][$game->stol_name]=$game->stol_name;
                    
                    if ($game->dokupka!=0)
                    {
                        
                        $table[2][$game->stol_name].='<p>'.$game->dokupka.'</p>';
                        
                        $table[6][$game->stol_name]+=$game->dokupka; //itog dokupok
                    }
                    
                    if ($game->any_time!=0)
                    {
                        $table[3][$game->stol_name]=$game->any_time;//время
                        $plata=$this->stat_model->plata($game->stol_name);
                        $table[10][$game->stol_name]=$game->any_time/60*$plata['oplata']/60;  //plata za vremiya
                    }
                    if ($game->money_lose!=0)
                    {
                        $in=$this->object_model->get_stol_rackdack($game->number_game);
                        $table[4][$game->stol_name]+=$in->rakeback;//рекбек
                    }
                    $table[5][$game->stol_name]=$game->balance;//balance
                    $table[11][$game->stol_name]=$table[4][$game->stol_name]+$table[5][$game->stol_name]-$table[6][$game->stol_name]-$table[10][$game->stol_name];
                    
                }


                $tableview='<thead><tr> ';

                foreach ($table[1] as $key => $value) 
                {
                    $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>';
                }
                $tableview.='</tr></thead><tbody><tr>';

                foreach ($table[2] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[3] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value/60).'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[4] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[5] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[10] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value).'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                $this->data['itog']=0;
                foreach ($table[11] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value).'</h3></td>';
                        $this->data['itog']+=floor($value);
                    }
                    
                }
                $tableview.='</tr></tbody>  ';


                $this->data['table']=$tableview;
                $this->load->view('statisticuser', $this->data);
	}

 public function userform()
	{
        $this->load->model('stat_model');
        $user=$this->faq_model->get_user_info_byid($this->input->post('id'));
        if ($this->input->post('submit')=='Депозит')
        {
            $bal=$user->balance+$this->input->post('deposit');
        }
        if ($this->input->post('submit')=='Вывод')
        {
            $bal=$user->balance-$this->input->post('vivod');
        }
        $this->stat_model->editbalance($this->input->post('id'),$bal);


        redirect(base_url().'gamers', 'location');
    }

  public function clearn($itog)
	{
        $this->load->model('stat_model');
        $this->stat_model->konec($this->data['session']['nick']);
         $this->stat_model->editbalance($this->data['session']['id'], $this->data['balance']+$itog);

        redirect(base_url().'gamers', 'location');
    }
    public function clearn1($id,$itog)
	{
        $this->load->model('stat_model');
        $user=$this->faq_model->get_user_info_byid($id);
        $this->stat_model->konec($user->nick);
         
          $this->stat_model->editbalance($id, $this->data['balance']+$itog);
        redirect(base_url().'gamers', 'location');
    }

     public function infouser($id)
	{
            	
    if (!isset($this->data['session']['prava']) )
		{ 
                    redirect(base_url(), 'location');
                }

                $this->load->model('stat_model');
                $this->load->model('object_model');
                $user=$this->faq_model->get_user_info_byid($id);
                $this->data['id']=$id;
                $fff= date('d.m.Y');

                 $fff= '08.08.2016';
                $gamer=$this->stat_model->ger($user->nick,$fff);
                
                        $table[1]['first']='Стол';
                        $table[2]['first']='Докупка';
                        $table[3]['first']='Время';//время
                        $table[10]['first']="Плата за время";//plata za vremiya
                        $table[4]['first']='Рейкбэк';//рекбек
                        $table[5]['first']='Выход из-за стола';//balance
                        $table[6]['first']='';//itog dokupok
                        
                        $table[11]['first']='Итог';//vvec itog
                
                foreach ($gamer as  $game) 
                {
                    if (!isset($table[1][$game->stol_name]))
                    {
                         $table[1][$game->stol_name]=$game->stol_name;
                         $table[2][$game->stol_name]='';
                         $table[3][$game->stol_name]=0;//время
                         $table[4][$game->stol_name]=0;//рекбек
                         $table[5][$game->stol_name]=0;//balance
                         $table[6][$game->stol_name]=0;//itog dokupok
                         $table[10][$game->stol_name]=0;//plata za vremiya
                         $table[11][$game->stol_name]=0;//vvec itog
                    }
                    $table[1][$game->stol_name]=$game->stol_name;
                    
                    if ($game->dokupka!=0)
                    {
                        
                        $table[2][$game->stol_name].='<p>'.$game->dokupka.'</p>';
                        
                        $table[6][$game->stol_name]+=$game->dokupka; //itog dokupok
                    }
                    
                    if ($game->any_time!=0)
                    {
                        $table[3][$game->stol_name]=$game->any_time;//время
                        $plata=$this->stat_model->plata($game->stol_name);
                        $table[10][$game->stol_name]=$game->any_time/60*$plata['oplata']/60;  //plata za vremiya
                    }
                    if ($game->money_lose!=0)
                    {
                        $in=$this->object_model->get_stol_rackdack($game->number_game);
                        $table[4][$game->stol_name]+=$in->rakeback;//рекбек
                    }
                    $table[5][$game->stol_name]=$game->balance;//balance
                    $table[11][$game->stol_name]=$table[4][$game->stol_name]+$table[5][$game->stol_name]-$table[6][$game->stol_name]-$table[10][$game->stol_name];
                    
                }


                $tableview='<thead><tr> ';

                foreach ($table[1] as $key => $value) 
                {
                    $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>';
                }
                $tableview.='</tr></thead><tbody><tr>';

                foreach ($table[2] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[3] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value/60).'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[4] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[5] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.$value.'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                foreach ($table[10] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value).'</h3></td>';
                    }
                    
                }
                $tableview.='</tr><tr> ';
                $this->data['itog']=0;
                foreach ($table[11] as $key => $value) 
                {
                    if ($key=='first'){
                         $tableview.='<th class="nosort"><h3>'.$value.'</h3></th>' ;
                    }
                    else{
                        $tableview.='<td class="nosort"><h3>'.floor($value).'</h3></td>';
                        $this->data['itog']+=floor($value);
                    }
                    
                }
                $tableview.='</tr></tbody>  ';


                $this->data['table']=$tableview;
                $this->load->view('statisticuser', $this->data);
    }

    


}