        <?php
        $dayLimit = 7;
          $notifications = new Notification($user->data()->id, false, $dayLimit);
        if ($settings->navigation_type == 0) {
          $query = $db->query("SELECT * FROM email");
          $results = $query->first();

          //Value of email_act used to determine whether to display the Resend Verification link
          $email_act = $results->email_act;

          // Set up notifications button/modal
          if ($user->isLoggedIn()) {
            if ($dayLimitQ = $db->query('SELECT notif_daylimit FROM settings', array()))
            $dayLimit = $dayLimitQ->results()[0]->notif_daylimit;
            else
            $dayLimit = 7;

            // 2nd parameter- true/false for all notifications or only current
            $notifications = new Notification($user->data()->id, false, $dayLimit);
          }
          }




    if(isset($_GET['err'])){
      err("<font color='red'>".$err."</font>");
    }

    if(isset($_GET['msg'])){
      err($msg);
    }
