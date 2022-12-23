<!DOCTYPE html>
<html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projet 1</title>
        <link rel="stylesheet" href="style.css">
        </head>
<body> 

<!-------------------------------------------------------------------------
--------------------------------nav bar ----------------------------------->

       <div class="nav">
                 <ul nav-link>
                   <?php 
                       $data=yaml_parse_file("data/menu.yaml");

                        foreach ($data as $ancre => $onglet) {
                               echo '<li><a href="index.php#'.$ancre.'">'.$onglet.'</a></li>';
                        }
                        

                   ?>
                 </ul>
         </div> 
<!--------------------------------------------------------------------------
-----------------------------------Accueil----------------------------------
----------------------------------------------------------------------------->

        <div id="accueil"> <h1> Accueil </h1> 
                        <br><br>

                <h1>Paul ALLAINGUILLAUME</h1>
                <br><br>

<p>
        Actuellement en BTS SIO option SISR a saint ursule 
</p>
</div>
<!-- ------------------------------------------------------------------------
-----------------------------------A propos----------------------------------
----------------------------------------------------------------------------->
       <div id="a-propos" > 
               <br><br>
        <div class=paper >

                <h1> A propos </h1> 


                <?php
                        $data=yaml_parse_file("data/p-a-propos.yaml");
                        echo '<img class="photo-a-propos" alt="photo-a-propos" src="image/'.$data['phid'].'" >';
                        echo '<p>'.$data['presentation'].'</p>';
                        echo '<img class="logo-e2se" alt="logo-e2se" src="image/'.$data['logoent'].'" >';

                ?>



        </div>

<!-- ------------------------------------------------------------------------
-----------------------------------Competence----------------------------------
----------------------------------------------------------------------------->
<div id="competence"> <br>
        <div class=paper >
                <h1> Compétence </h1> 

                        <!-----progress bar----->
                           
                         <div class="container">
                            
                             <div class="progressbar-wrapper">
                              <div title="downloaded" class="progressbar" style="width:80%;"><span class="competence">HTML</span><span class="niveau">80%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:50%;"><span class="competence">CSS</span><span class="niveau">50%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:40%;"><span class="competence">php</span><span class="niveau">40%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:60%;"><span class="competence">yaml</span><span class="niveau">60%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:10%;"><span class="competence">pyton</span><span class="niveau">10%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:60%;"><span class="competence">word</span><span class="niveau">60%</span></div>
                             </div>

                             <div class="progressbar-wrapper">
                              <div title="downloading" class="progressbar" style="width:50%;"><span class="competence">exel</span><span class="niveau">50%</span></div>
                             </div> 
                            
                        </div>
                   
        </div>        
</div>

<!-- ------------------------------------------------------------------------
-----------------------------------experience----------------------------------
----------------------------------------------------------------------------->
       <div id="experience" > 
               <br><br>
        <div class=paper >

                <h1> Expérience </h1> 

            <div class=experience >
                        
                       <!--echo '<img class="logo-e2se" alt="logo-e2se" src="image/'.$data['logoent'].'" >'; -->
                        


                        <h2>College</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['college'].'</p>'; ?>     

                        <h2>Lycée</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['lycée'].'</p>'; ?>     

                        <h2>Stage seconde</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['stage-2de'].'</p>'; ?>     

                        <h2>Stage premiére</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['stage-1ere'].'</p>'; ?>  
                                            
                        <h2>Stage terminale</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['stage-term'].'</p>'; ?>     

                        <h2>Premiere anné d'alternance en BTS</h2>
                <?php 
                        $data=yaml_parse_file("data/experience.yaml");
                        echo '<p>'.$data['alt-1ere'].'</p>'; ?>  

            </div>

        </div>

<!-- ------------------------------------------------------------------------
-----------------------------------Formation----------------------------------
----------------------------------------------------------------------------->
     <div id="formation"> <br>
        <div class=paper >
                
                                <h1> Formation </h1> 

                <?php 
                        $data=yaml_parse_file("data/formation.yaml");
                        echo '<p>'.$data['brevet'].'</p>'; ?>

                <?php 
                        $data=yaml_parse_file("data/formation.yaml");
                        echo '<p>'.$data['bac'].'</p>'; ?>                       
                <?php 
                        $data=yaml_parse_file("data/formation.yaml");
                        echo '<p>'.$data['abilitation-elec'].'</p>'; ?>

                <?php 
                        $data=yaml_parse_file("data/formation.yaml");
                        echo '<p>'.$data['formation-cisco'].'</p>'; ?>    


            </div>
        </div>
<!-- ------------------------------------------------------------------------
-----------------------------------contact----------------------------------
----------------------------------------------------------------------------->

         <div id="contact" > 
               <br><br>
        <div class=paper >

                <h1> contact </h1> 

                    <div class=contact >
                     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                      </head>
                      <body>
                        <form action="?" method="POST">
                          <div class="g-recaptcha" data-sitekey="6Lfiip0jAAAAAE0cBy4n8RDlInDUfcuYuLtFFADm"></div>
                          <br/>
                          <input type="submit" value="Submit">
                        </form>
</body>


