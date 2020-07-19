<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function handle(Request $request)
    {
        set_time_limit(0);
        $toEmails =[
          'tamermar2@gmail.com'
          ,'salooh199877@gmail.com'
          ,'rociocantoran82@hotmail.com'
          ,'sweety7259@aol.com'
          ,'milagroslynnsanchez@gmail.com'
          ,'karlydelvalle1852@gmail.com'
          ,'karlydelvalle1852@gmail.com'
          ,'pcakes1121@comcast.net'
          ,'superbunraye@outlook.com'
          ,'martincr46@gmail.com'
          ,'vicklammie@aol.com'
          ,'jichols@charter.net'
          ,'acrazyexwife@yahoo.com'
          ,'billpope6@aol.com'
          ,'microcomputeronicsinc@gmail.com'
          ,'allenpayne23@yahoo.com'
          ,'renash06@yahoo.com'
          ,'cleo.helen@hotmail.com'
          ,'dbutlerlaw@yahoo.com'
          ,'luz.flores.2018@outlook.com'
          ,'milesrooster@gmail.com'
          ,'pitabarbosa123@gmail.com'
          ,'petuniabags@gmail.com'
          ,'f_ramirez_ortega@hotmail.com'
          ,'batistaangie@yahoo.com'
          ,'johnwilhe@gmail.com'
          ,'mktufail6272@gmail.com'
          ,'luz.donato@yahoo.com'
          ,'mijangosgeovannie@gmail.com'
          ,'chorrazthe1@yahoo.com'
          ,'congvo58@gmail.com'
          ,'slopez0105@gmail.com'
          ,'rdutexbama2@gmail.com'
          ,'t.mccrary1984@gmail.com'
          ,'babee_gurl1996@yahoo.com'
          ,'bebe.mendez1@gmail.com'
          ,'bullshiit4@gmail.com'
          ,'fsmeno@yahoo.com'
          ,'bradmess4sale@gmail.com'
          ,'dorisals@outlook.com'
          ,'keith@goldsmithmusic.com'
          ,'yanira_t@yahoo.com'
          ,'bearcaptain88@gmail.com'
          ,'ilovemydogs1000@gmail.com'
          ,'berniemeyer697@msn.com'
          ,'nruane@zoominternet.net'
          ,'lalani.zohra@gmail.com'
          ,'karenblanton10@gmail.com'
          ,'debbie929@att.net'
          ,'lakemichrocks@gmail.com'
          ,'velindaroe@yahoo.com'
          ,'jtdamato@yahoo.com'
          ,'conphoenix@aol.com'
          ,'songstress47@aol.com'
          ,'rebecca.l.balistreri@gmail.com'
          ,'nqiao246@yahoo.co.jp'
          ,'jpeck94605@aol.com'
          ,'ellis@parsons-roofing.com'
          ,'pagagulf@gmail.com'
          ,'maricopello2002@yahoo.com'
          ,'qqueenie@cox.net'
          ,'catwalksalone@yahoo.com'
          ,'michaelsemora@yahoo.com'
          ,'kroy@avoyellespsb.com'
          ,'hooverj1965@gmail.com'
          ,'diego88lopez@gmail.com'
          ,'isabelperez1680@gmail.com'
          ,'jvlamostre24@gmail.com'
          ,'menchiemorales951@yahoo.com'
          ,'teresagetsinger@gmail.com'
          ,'denkiyubin@yahoo.com'
          ,'zephyrwing7@yahoo.com'
          ,'bonilla@optonline.net'
          ,'acjncj@aol.com'
          ,'zjn88913@gmail.com'
          ,'myobsession247@gmail.com'
          ,'teambarto2016@gmail.com'
          ,'greg.c.gonzalez@gmail.com'
          ,'timgammon13@gmail.com'
          ,'095029@gmail.com'
          ,'hollymayh999@gmail.com'
          ,'azrussell132@hotmail.com'
          ,'fzottoli537@gmail.com'
          ,'kbrenda599@gmail.com'
          ,'ajt@att.net'
          ,'sherbearwoody@yahoo.com'
          ,'pattibis2@hotmail.com'
          ,'lcache@aol.com'
          ,'dvardiman@sanfordlab.org'
          ,'jakeguns73@sbcglobal.net'
          ,'tranqsan@yahoo.com'
          ,'watsontrampas@yahoo.com'
          ,'barry169@centurylink.net'
          ,'fumerop@gmail.com'
          ,'pslovealv@gmail.com'
          ,'chasemaurer2@aol.com'
          ,'r_amburn@yahoo.com'
          ,'annarts@comcast.net'
          ,'tljdolphin38@yahoo.com'
          ,'15c@hivn.net'
          ,'anita.sharpe@indstate.edu'
          ,'chef.randi03@gmail.com'
          ,'irekuzar@gmail.com'
          ,'holly56@sbcglobal.net'
          ,'brtnvsky@yahoo.com'
          ,'dwil63@yahoo.com'
          ,'samestepa@yahoo.com'
          ,'brunski18@gmail.com'
          ,'hhchristakos@yahoo.com'
          ,'rick.w.childers@gmail.com'
          ,'fboris77@hotmail.com'
          ,'jahatter69@outlook.com'
          ,'scott.burris@comcast.net'
          ,'jhudso25@yahoo.com'
          ,'alanrocha.apps@gmail.com'
          ,'tokenupat420@hotmail.com'
          ,'harry3120@att.net'
          ,'longchad8608@yahoo.com'
          ,'nicsmithgs67@gmail.com'
          ,'sandfog1215@gmail.com'
          ,'regino.rodriguez@delphi.com'
          ,'ranwhite@jamadots.com'
          ,'hkland.88@gmail.com'
          ,'rosemarry.bishop@gmail.com'
          ,'azyohe@yahoo.com'
          ,'dmustiga@gmail.com'
          ,'rbnhd55@yahoo.com'
          ,'waheedullah_2018@yahoo.com'
          ,'vchester@setec-cr.com'
          ,'tjpredator@hotmail.com'
          ,'benmck58@yahoo.com'
          ,'violahow24@hotmail.com'
          ,'kindshuh2@yahoo.com'
          ,'newman@planetnewman.com'
          ,'info@bccustommetalworks.com'
          ,'sandra.noceti@yahoo.com'
          ,'huppyvic@gmail.com'
          ,'sjonesbush@gmail.com'
          ,'cookiebard@ymail.com'
          ,'ojendisdiana@yahoo.com'
          ,'weavermelody62@yahoo.com'
          ,'ilovemydogs1000@gmail.com'
          ,'greggciafarone@gmail.com'
          ,'paqflaq@hotmail.com'
          ,'jgdgopac@sio.midco.net'
          ,'mikealopez71@aol.com'
          ,'tfbonn2@gmail.com'
          ,'cmartinez436@hotmail.com'
          ,'gottschalk@spinn.net'
          ,'jdozier280@gmail.com'
          ,'swampmary@shutr.net'
          ,'klevitt1120@gmail.com'
          ,'andrew.hughes@designingdigitally.com'
          ,'jeff27in@gmail.com'
          ,'kra0818@yahoo.com'
          ,'emt.angela@gmail.com'
          ,'arturos96@aol.com'
          ,'shlwbbr17@gmail.com'
          ,'chalkster6@aol.com'
          ,'nickpannier@gmail.com'
          ,'peterljennen@gmail.com'
          ,'klevitt1120@gmail.com'
          ,'lucyeerr82@gmail.com'
          ,'mercylibre1@yahoo.com'
          ,'angelz232002@yahoo.com'
          ,'cerasujg@localnet.com'
          ,'faulknerandsonscontracting@gmail.com'
          ,'nprior33@yahoo.com'
          ,'galeunderwood@gmail.com'
          ,'rene.ordaz13@icloud.com'
          ,'rene.ordaz13@icloud.com'
          ,'smithrdrusilla347@gmail.com'
          ,'valerie.carter129@yahoo.com'
          ,'leslou@tampabay.rr.com'
          ,'aleidam24@yahoo.es'
          ,'ajdieu@yahoo.com'
          ,'brandonsmith527@aol.com'
          ,'pele1822@gmail.com'
          ,'heathmontanye86@yahoo.com'
          ,'cinthiabarrer@yahoo.com'
          ,'kam2g@yahoo.com'
          ,'julioyjasmine@gmail.com'
          ,'bricksandbits@yahoo.com'
          ,'jonathanpthompson@outlook.com'
          ,'panagdena@yahoo.com'
          ,'granger8711@gmail.com'
          ,'lucyeerr82@gmail.com'
          ,'mariovans7893@gmail.com'
          ,'jasonclydewolf@yahoo.com'
          ,'hueypilot23@hotmail.com'
          ,'madrigal.amanda94@yahoo.com'
          ,'lonnybonner@yahoo.com'
          ,'kittyakhobadze@mail.ru'
          ,'hisstarr0123@gmail.com'
          ,'sleis13@yahoo.com'
          ,'joaquinjose_balaguer@hotmail.com'
          ,'justmeandmydog123456789@gmail.com'
          ,'rscott4724@yahoo.com'
          ,'dsalger69@gmail.com'
          ,'sweetnel1956@yahoo.com'
          ,'jasonwallerich@aol.com'
          ,'mnuguid7@yahoo.com'
          ,'bosshorse@verizon.net'
          ,'hkhc@msn.com'
          ,'sje77@msn.com'
          ,'coby516@hotmail.com'
          ,'rscott4724@yahoo.com'
          ,'bigdaddyb430@yahoo.com'
          ,'auaroadrunner@hotmail.com'
          ,'genechavez@hotmail.com'
          ,'leydiana1220m@hotmail.com'
          ,'martinmarilla2@gmail.com'
          ,'r.chipper@hotmail.com'
          ,'loveumelyssa88@gmail.com'
          ,'johnmanckia@gmail.com'
          ,'josh@joshuaberkowitz.com'
          ,'tax10tax10@cs.com'
          ,'straybasket@yahoo.com'
          ,'sb.roegepederson@gmail.com'
          ,'perianwebb@yahoo.com'
         ];
        for($i = 200; $i < 250; $i++) {
            $toEmail = $toEmails[$i];
            Mail::send('emails.newsletter', [], function($message) use ($toEmail) {
                $message->to($toEmail)->subject('Enjoy 10% Discount Only For Our Lovely Customers');
            $message->from('magicchoice.store@gmail.com', 'Magic Choice Store');

            });
            echo $toEmail . '<br>';
        }

    }
}