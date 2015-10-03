<?php

if( isset($_REQUEST['url']) ) {

    $data = [
        'url' => $_REQUEST['url'],
        'email' => $_REQUEST['email']
    ];

    Mail::send('emails.suggestion', $data, function ($message) use ($data) {
        $message->from($data['email']);
        $message->to('andreas@andreasek.se');
        $message->subject($data['url']);
    });
}

?>

<form>
            <div class="card-box col-md-4 col-sm-6">  
                <div class="card text-center" data-background="image" data-src="<?=asset('assets/img/vasteras.jpg')?>">
                    <h4 class="title title-modern">Hjälp oss!</h4>
                    
                    <?php if( isset($data) ) { ?>
                    <div class="header">
                        <div class="icon">
                            <i class="pe-7s-like2"></i>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="content">

                      <div class="form-group">
                        <label for="url">Vilka nyheter saknar du här?</label>
                        <input name="url" type="text" class="form-control" placeholder="http://" value="<?=isset($data['url'])?$data['url']:'';?>">
                      </div>

                      <div class="form-group">
                        <label for="email">E-postadress</label>
                        <input name="email" type="text" class="form-control" placeholder="jag@me.com" value="<?=isset($data['email'])?$data['email']:'';?>">
                      </div>

                      <p>E-postadressen används endast för att kunna återkoppla till dig</p>

                    </div> 
                    
                    <div class="footer btn-center">
                        <button class="btn btn-neutral btn-round btn-modern">Skicka</button> 
                    </div>    
                    
                    <div class="filter filter-blue"></div>                       
                </div> <!-- end card -->             
            </div>
</form>