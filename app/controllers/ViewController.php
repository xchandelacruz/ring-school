<?php

class ViewController extends \BaseController {


    public function showRoot(){
        return View::make('index');
    }

    public function showanimation(){
        return View::make('bubbles');
    }

    public function show_3_animation(){
        return View::make('3-bubbles');
    }

    public function showCourselist(){
        return View::make('courselist');
    }

    public function showGitdirectorCourselist(){
        return View::make('Course.globalitdirectorcourse');
    }   
    public function showBridgeseCourselist(){
        return View::make('Course.bridgesecourse');
    }   
    public function showProgrammerCourselist(){
        return View::make('Course.programmercourse');
    }      
    public function showDesignerCourselist(){
        return View::make('Course.designercourse');
    }       
    public function showInternshipCourselist(){
        return View::make('Course.internshipcourse');
    }   


    public function getCompanyContact(){
        return View::make('company-contact')
        ->with('Username', '')
        ->with('Email', '')
        ->with('Confirmemail', '')
        ->with('Message', '')
        ->with('Successmessage', '')
        ->with('Checkmessagestate', '0')
        ->with('ReturnCheckmessagestate', '0');
    } 

    public function showCompanyContact(){

        $username = Input::get('name');
        $email = Input::get('email');
        $emailconfirm = Input::get('confirm-email');
        $message = Input::get('message');

            Session::put('sess_selected_username',$username);
            Session::put('sess_selected_email',$email);
            Session::put('sess_selected_emailconfirm',$emailconfirm);
            Session::put('sess_selected_message',$message);


            return View::make('company-contact')
            ->with('Username', $username)
            ->with('Email', $email)
            ->with('Confirmemail', $emailconfirm)
            ->with('Message', $message)
            ->with('Successmessage', '')
            ->with('Checkmessagestate', '1')
            ->with('ReturnCheckmessagestate', '1');


    } 

    public function returnCompanyContact(){

/*        $username = span::get('name');
        $email = span::get('email');
        $emailconfirm = span::get('confirm-email');
        $message = span::get('message');*/

        return View::make('company-contact')
/*        ->with('Username', $username)
        ->with('Email', $email)
        ->with('Confirmemail', $emailconfirm)
        ->with('Message', $message)*/
        ->with('Successmessage', '')
        ->with('Checkmessagestate', '0')
        ->with('ReturnCheckmessagestate', '1');
    } 


    public function postCompanyContact()
    {   

            $inquiry = new inquiries;
            $inquiry->inquire_name = Session::get('sess_selected_username');
            $inquiry->inquire_email = Session::get('sess_selected_email');
            $inquiry->inquire_message = Session::get('sess_selected_message');
            $inquiry->save();

            return View::make('company-contact')
            ->with('Checkmessagestate', '0')
            ->with('ReturnCheckmessagestate', '0')         
            ->with('Successmessage', 'メッセージは送信されました。');
    }     




}