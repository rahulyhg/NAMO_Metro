<?php 
	$data['link']="index";
  $this->load->view('templates/header',$data);
  $registration_id = $this->session->userdata('registration_id');
 ?>
<!-- //header --> 
<!-- breadcrumbs -->
<div class="services-top-breadcrumbs">
  <div class="container">
    <div class="services-top-breadcrumbs-right">
      <ul>
        <li><a href="<?php echo base_url();?>">Home</a> <i>/</i></li>
        <li>Privacy & You</li>
      </ul>
    </div>
    <div class="services-top-breadcrumbs-left">
      <h3  style="color:#fc9b4b;"><?php echo ((empty($registration_id)?"Privacy & You":"SPV".$registration_id))?></h3>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->
<div class="single">
  <div class="container">
    <div class="col-md-12 single-left">
       <div class="accordion">
            <dl>
              <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordionTitleActive accordionTitle js-accordionTrigger active">Privacy & You </a> 
                
              </dt>
              <dd class="accordion-content is-expanded accordionItem " id="accordion1" aria-hidden="true">
                  <p>Welcome to Shree Sai Prasad Vivah, the largest and most trusted Matrimonial Services for the HINDU CHARMAKAR Community. In order to use the site , you must register as a saiprasadvivah.net , read these Terms of Use and Register with the Site either online or visit at our Head Office at Kurla, Mumbai. This Agreement sets out the legally binding terms for your membership. This Agreement may be modified by</p> 
              </dd>
              <dt>
                <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
                  Eligibility</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
                 
               <p>  Sai Prasad Vivah  is of the opinion (in its sole discretion) or has any reason to believe that you are not eligible to become a member or that you have made any misrepresentation about your eligibility, Saiprasadvivah.net  reserves the right to forthwith terminate your membership and / or your right to use the Service without any refund to you of any of your unutilized subscription fee.</p>
 
              </dd>
             <!-- <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Terms
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                 <p>You may terminate your membership at any time, for any reason by writing to Saiprasadvivah.net . In the event you terminate your membership, you will not be entitled to a refund of any unutilized subscription fees. Saiprasadvivah.net  may terminate your access to the Site and/or your membership for any reason effective upon sending notice to you at the email address you provide in your application for membership or such other email address as you may later provide to Saiprasadvivah.net . If Saiprasadvivah.net terminates your membership in the Saiprasadvivah.net Service because you have breached the Agreement, you will not be entitled to any refund of any unused Subscription fees.</p>
              </dd>-->
              
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                   Non-Commercial Use by Members 
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
               <ul style="list-style:inside;">
               <li>Saiprasadvivah.net reserves the right in it's sole discretion to review the activity & status of each account & block the account of a member based on such review.</li>
<ul style="list-style:url(images/check.png);">
<li>we will communicate with you by e-mail or by posting notices on this site.</li>
<li>you agree that all agreements, notices, disclosures and other</li>
<li>Legal requirement that such communications be in writing.</li>
</ul>
 <li>You cannot engage in advertising to, or solicitation of, other Members to buy or sell any products or services through the Service. You will not transmit any chain letters or junk email to other Saiprasadvivah.net  Members. Although Saiprasadvivah.net  cannot monitor the conduct of its Members off the Saiprasadvivah.net  Site, it is also a violation of these rules to use any information obtained from the Service in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to any Member without their prior explicit consent. In order to protect Saiprasadvivah.net  and/or our Members from any abuse / misuse, Saiprasadvivah.net  reserves the right to restrict the number of bio-datas which a Member may get of other Members which Saiprasadvivah.net  deems appropriate in its sole discretion.</li>
 <li> Saiprasadvivah.net  reserves the right to screen communications/messages that you may send to other Member(s) and also regulate the same by deleting unwarranted/obscene communications at any time at its sole discretion without prior notice to any Member.</li>
</ul>
              </dd>
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                  Contents Posted on the Site
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
             <ul style="list-style:inside;"><li>  With respect to Content you submit or make available for inclusion on publicly accessible areas of the Site including but not limited to your contact details, you hereby unconditionally and irrevocably grant to Saiprasadvivah.net  the license to use, distribute, reproduce, modify, adapt, publicly perform and publicly display such Content on the Site and to Saiprasadvivah.net  Centre members from time to time. You understand and hereby agree that all information, data, text, photographs, graphics, messages, tags, or other Content whether publicly posted or privately transmitted or otherwise made available to Saiprasadvivah.net  or Shaadi.com members, are the sole responsibility of the person from whom such Content originated and shall be at the member's/person's sole risks and consequences. This means that you (and not Saiprasadvivah.net ) is solely responsible for all Content that you upload, post, email, transmit or otherwise make available via the Service. Saiprasadvivah.net  does not control the Content posted via the Service and, as such, does not guarantee the accuracy, integrity or quality of such Content. Under no circumstances will Saiprasadvivah.net  be liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or otherwise made available via the Service.</li>
<li>  You are solely responsible for the Content that you publish or display (hereinafter, "post") on the Saiprasadvivah.net service or on Saiprasadvivah.net  Site or transmit to other Saiprasadvivah.net  Members. Saiprasadvivah.net  reserves the right to verify the authenticity of Content posted on the Site. In exercising this right, Saiprasadvivah.net  may ask you to provide any documentary or other form of evidence supporting the Content you post on the Site. If you fail to produce such evidence, Saiprasadvivah.net  may, in its sole discretion, terminate your Membership without a refund.</li>
<li>   By posting Content to any public area of Saiprasadvivah.net , you automatically grant, and you represent and warrant that you have the right to grant, to Saiprasadvivah.net , and other Saiprasadvivah.net  Members, an irrevocable, perpetual, non-exclusive, fully-paid, worldwide license to use, copy, perform, display, and distribute such information and content and to prepare derivative works of, or incorporate into other works, such information and content, and to grant and authorize sublicenses of the foregoing.</li>
<li>   The following is an indicative list of the kind of Content that is illegal or prohibited on the Site. Saiprasadvivah.net will investigate and take appropriate legal action in its sole discretion against anyone who violates this Agreement, including without limitation, removing the offending communication / Content from the Service and terminating the Membership of such violators without a refund. Illegal and prohibitive Content includes Content that which:
<ul style="list-style:url(images/check.png);">
<li>harasses or advocates harassment of another person</li>
<li> promotes information that you know is false, misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libelous;</li>
<li>contains restricted or password only access pages, or hidden pages or images (those not linked to or from another accessible page) ;</li>
<li> provides material that exploits people under the age of 18 in a sexual or violent manner, or solicits personal information from anyone under 18;</li>
<li>solicits passwords or personal identifying information for commercial or unlawful purposes from other users; and</li>
</ul>
</li>

<li>  You must use the Saiprasadvivah.net  Service in a manner consistent with any and all applicable local, state, and federal laws, rules and regulations.</li>
<li>   You cannot include in your Member profile, visible to other members, any telephone numbers, street addresses, last names, URL's, and email addresses. </li>
</ul>
<p>You cannot post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights.</p>
<p>
Saiprasadvivah.net is the owner and authorized user of the domain www. Saiprasadvivah.net.
You are solely responsible for your interactions with other Saiprasadvivah.net  Members. Saiprasadvivah.net reserves the right, but has no obligation, to monitor disputes between you and other Members. Saiprasadvivah.net  also reserves the right to take appropriate action against errant members. However, Saiprasadvivah.net is not obliged to share such action with other members, including complainants.Saiprasadvivah.net expressly disclaims any responsibility or liability for any transactions or interactions between the members inter-se.</p>
<p> Saiprasadvivah.net  is not responsible for any incorrect or inaccurate Content posted on the Site or in connection with the Saiprasadvivah.net  Service, whether caused by Users, Members or by any of the equipment or programming associated with or utilized in the Service, nor for the conduct of any User and/or Member of the Saiprasadvivah.net Service whether online or offline. Saiprasadvivah.net assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, User and/or Member communications or any communications by Saiprasadvivah.net  to its Members. Saiprasadvivah.net  is not responsible for any problems or technical malfunction of any telephone network or lines, computer on-line-systems, servers or providers, computer equipment, software, failure of email or players on account of technical problems or traffic congestion on the Internet or at any web site or combination thereof, including injury or damage to Users and/or Members or to any other person's computer related to or resulting from participating or downloading materials in connection with the Saiprasadvivah.net  Site and/or in connection with the Saiprasadvivah.net Service. Under no circumstances will Saiprasadvivah.net  be responsible for any loss or damage resulting from anyone's use of the Site or the Service and/or any Content posted on the Saiprasadvivah.net  Site or transmitted to Saiprasadvivah.net  Members.</p>
 <p>
 In no event will Saiprasadvivah.net  be liable to you or any third person for any indirect, consequential, exemplary, incidental, special or punitive damages, including also lost profits arising from your use of the Site or the Saiprasadvivah.net  Service, even if Saiprasadvivah.net  has been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, Saiprasadvivah.net 's, liability to you for any cause whatsoever, and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to Saiprasadvivah.net, for the Service during the term of membership.</p>
              </dd>
              
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" 
                class="accordion-title accordionTitle js-accordionTrigger">
                    circumstances
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
             <p>howsoever</p>   
         <ul style="list-style:inside;">
     <li> any act or omission not done by Saiprasadvivah.net;</li>
         <li> any untrue or incorrect information submitted by you or on your behalf;</li>
         <li>any decision taken by you or on your behalf or any consequences thereof, based on any information provided by any other user;</li>
        <li> any unauthorized or illegal act done by any third party relating to or connected with</li>  
         <li> any information submitted by you or on your behalf;</li>
         <li>any cybercrime attempted or committed by anyone;</li>
        <li> any incident of force-majeure or 'act of god'.</li>
</ul>
<p> <strong>to provide this feature to its members.</strong></p>
<ul>
<li> Copy of Bio-data which is duly signed by respective person,</li>
         <li> Any one copy of Photo ID proof like Pan Card / Election Card / Passport which is duly signed by respective person, 
       KURLA  OFFICE, MUMBAI BY COURIER OR SPEED POST ONLY.</li>
       
</ul>
<p> <strong>profile or all the profiles.</strong></p>
        <p>purpose of finding a life partner. You are not allowed to misuse the services    
       or objectionable content is found, or in the case of your contact details
       profile for other reasons not mentioned herewith. If any abusive content is
       your profile. You will not post or transmit any content, information or
       licensed rights. Saiprasadvivah.net will not in any way be responsible or
      describedabove.</p>
      <p><strong>ARE NOT REFUNDABLE under any circumstances.</strong> </p>
      <ul>
      <li>  Your membership in the Saiprasadvivah.net service is for your sole,</li>
      <li> you may not assign or transfer your account to any other person or entity.</li>
      </ul>
      <p> Saiprasadvivah.net will maintain confidential, all personal information [other than that meant for posting or transmission] furnished by members and shall take all possible and /or bonafide steps for maintaining the confidentiality. However, Saiprasadvivah.net may divulge such information if required by law. It is unconditionally agreed, understood and acknowledged by you that the information and/or data that may be submitted by you shall be preserved and retained by Saiprasadvivah.net for all time to come as permissible under law, notwithstanding cessation, termination or discontinuation of the membership.</p>
              </dd>
              
              
              <dt>
                <a href="#accordion3" aria-expanded="false" aria-controls="accordion3" class="accordion-title accordionTitle js-accordionTrigger">
                    Other
                </a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion3" aria-hidden="true">
                 
                 <p>becoming a Member of the Saiprasadvivah.net  service, contains the</p>
                   <p>Please contact us with any further questions or queries regarding this
<a href="http://saiprasadvivah.net/">www.saiprasadvivah.net </a>or communicate at
<a href="">saiprasadvivah@gmail.com.</a> </p>   
 
<p><strong>All Rights are reserved.</strong></p>

              </dd>
              
               
              
            </dl>
            
          </div>
    </div>
     <div class="clearfix"> </div>
  </div>
</div>
<!-- services-bottom -->
  <div class="services-bottom">
    <div class="container">
      <div class="services-bottom-left">
        <h3>What Are You Waiting For Get Register Today. Or Call Us - 9702970803</h3>
        <p>"we assist you to meet with potential life partners With ample database of thousands of prospective brides and grooms and build lifetime relationships."</p>
      </div>
      <div class="services-bottom-right">
        <div class="m2">
          <a href="<?php echo base_url('common/show_pages/contact_us/3');?>" class="hvr-bounce-to-bottom" class="hvr-bounce-to-bottom hvr-bounce-to-bottom1">Contact Us</a>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //services-bottom -->
<!-- footer -->
<?php 
	$this->load->view('templates/footer');
?>


 
 
