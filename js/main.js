


    let signupcomponent = {template:`<div id="signupArea">
        
    <div class="container">
    <div class="row">
    <div class="col">
    <img src="images/banner2.jpg" style="width:1100px">
  <br><br>
          </div>
<div class="col"> 
        <form action="admin/signned_up_page.php"  method="post">
        <h2>Join Us Now!</h2>
    <fieldset style="width: 250px;"><br>        
       <label>First Name:</label>
         <input v-model="input.firstname" type="text" name="firstname"  required class="form-control">

         <label>Last Name:</label>
         <input v-model="input.lastname" type="text" name="lastname" required class="form-control">

         <label>Email:</label>
         <input v-model="input.email" type="email" name="email" required class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" > 

         <label>Country:</label>
         <input v-model="input.country" type="text" name="country" required class="form-control">  
    </fieldset>
        <br>
        <button type="submit" class="btn  btn-secondary btn-lg">Go!</button>
        
    </form></div>
    </div></div>
   </div>`,

         data() {return {input: {firstname: "", lastname: "", email:"",country:""}}},
         methods:{
        }


      };


    let homecomponent = {template:`<div>
        
        <div id="homeImg">
        <img src="images/banner2.jpg" style="width: 1100px" >
        </div>



<div class="container" >
  <div class="row">
 <div class="col">

 <div class="col" id="mapTextB">
        <h3>HIV and Youth</h3>
        <br>
        <p id="mapText">Currently, over 30% of all new HIV infections globally are estimated to occur among youth ages 15 to 25 years. Also, increasingly, children infected at birth grow into adolescents who have to deal with their HIV positive status. Combining the two, there are 5 million youth living with HIV.
      <p>
      <p id="mapText">Young people’s risk of becoming newly infected with HIV is closely correlated with age of sexual debut. Abstinence from sexual intercourse and delayed initiation of sexual behaviour are among the central aims of HIV prevention efforts for young people. Decreasing the number of sexual partners and increasing access to, and utilization of comprehensive prevention services, including prevention education and increasing access to condoms are essential for young people who are sexually active.</p>
        </div>

</div></div><br><br>

<div class="container1" >
  <div class="row">
 <div class="col">
            <div class="col" id="mapTextB">
            <div class="detailvo">
          <h3>Community</h3><br><p>HIV Programs and Services
            PHA & Hep C Activities<br>
            Needle and Syringe Program<br>
            Safe Needle Disposal<br>
            Carepoint Consumption
            Open Closet
            TOPICS WE CAN SPEAK ABOUT:<br>
            HIV/AIDS Basics.<br>
            Hepatitis C Basics<br>
            Harm Reduction</p>
            <br>
            <br><br>
            <h3>Events</h3>
            <p>Couch Crew<br>
            Coffee Drop-In<br>
            PrEP Clinic<br>
            Want to join us? Call Today!
            <br>9:00AM to 5:00PM<br>
            1.866.920.1601<br>
            Monday to Friday</p><br></div>
            <br><br></div>

            <div id="volunpart" style="height:700px">
            <h2>OUR VISION - Volunteer</h2>
            <img src="images/v1.jpg" style="width: 1080px">
            <div class="detailvo">
            <h3>VOICE</h3><br>
            <p>This work gives voice to both the individuals with HIV/AIDS and Hepatitis C (HCV) who are challenged, as well as to the groups and the communities working actively to improve the quality of life and opportunities for those living with or affected by HIV/AIDS and Hepatitis C (HCV).</p>
            <br><h3>HOME</h3><br>
            <p>RHAC provides a home for people who are living with HIV/AIDS and Hepatitis C (HCV). Home reflects the residential services through the John Gordon Home, which is a Home with a Heart, a special place for people who receive one year of supports in order to stabilize their lives.</p>
            </div>
            <div class="detailvo">
            <br><h3>KNOW</h3><br>
            <P>Knowledge both educates individuals on the risks that people need to be aware of and the actions they need to take to reduce their potential to contract HIV/AIDS and Hepatitis C (HCV), as well as to source and apply practices.</p>
            <br><h3>HOPE</h3>
            <p>Hope is about a world where there will be no new HIV or Hepatitis C (HCV) infections and no further deaths from AIDS. It is about a day where stigma no longer exists. It is about finding a cure!</p>
            </div></div>

            
            
          </div><br><br><br><br>
          <div class="col" id="videoPart" style="height: 450px">
          <h3>put video here</h3><br><br> 
          </div><br><br>
          <div id="iconp">
          <img src="images/icon.jpg" style="width: 200px" >
          <img src="images/icon1.png" style="width: 200px" >
          <img src="images/icon2.png" style="width: 200px" >
          <img src="images/icon3.png" style="width: 200px" >
          </div>
 
    <br><br>
    


   
    </div>`};



    let communitycomponent = {template:`<div>
    <div id="comhead">
      <img src="images/banner3.jpg" style="width: 1100px" >
      <div>
      <br><br>
      <div id="com1p" style="height:500px">
<br><br><h2 class="bTitle">WHAT IS HIV/AIDS?</h2>

<br>
<div id="detailvo1">
       <p>HIV stands for human immunodeficiency virus - a virus that weakens the immune system.
       AIDS stands for acquired immune deficiency syndrome - an advanced form of the disease caused by HIV. Not all people living with HIV will develop AIDS.
       There are five bodily fluids that can have enough HIV to transmit the virus:
       <br>
       Blood<br>
       Semen<br>
       Anal fluids/mucous<br>
       Vaginal fluids<br>
       Breast milk</p>
       <img src="images/test2.jpeg" style="height: 300px">
       </div>
       
</div>

      
 </div>
 </div>  
 <br><br>
 <div id="com2p" style="height:400px"> 
       
       <h2 class="bTitle">WHAT IS HEPATITIS C?</h2><br>
       <p>Hepatitis C (Hep C) is a chronic liver disease caused by the Hepatitis C virus (HCV). HCV causes inflammation 
       and scarring of the liver.</p><br>
       <p>Hepatitis C is NOT spread through any other bodily fluids such as:<br>
       saliva<br>
       sweat<br>
       semen<br>
       vaginal fluids<br>
       urine<br>
       breast milk, etc.<br></p>
       
       </div>
<br><br>
       <div id="com3p" style="height:420px">
       <h2 class="bTitle">Get Tested</h2>
       <div class="detailvo">
       <img src="images/test1.jpg" style="height: 300px">
      <p>At Regional HIV/AIDS Connection,  you can get HIV and Hepatitis C rapid testing done. 
      Testing is drop-in style, no appointment or health card is required.  <br>
      RHAC'S Testing Hours<br>Monday 1:30 – 3:30pm (HIV/Hep C)<br>
      Tuesday 1:30 – 3:30pm (HIV/Hep C) <br>
      Last Wednesday of each month 1:00 – 3:00pm (HIV)<br>
      Every other Friday 1:30 – 3:30pm (Hep C)<br>For more information on Hepatitis C rapid test testing visit CATIE.
</p></div><br>
      
       </div>
       <br><br>

        <div id="com4p" style="height:400px">
        <h2 class="bTitle">WHY IS REGIONAL HIV/AIDS CONNECTION (RHAC) IN YOUR COMMUNITY?</h2>
     <br> <p>In 2006, an HIV/AIDS community planning report commissioned 
     by the AIDS Bureau at the Ontario Ministry of Health was 
     completed using input from people involved in HIV/AIDS 
     work in London and surrounding counties. 
     The report highlighted the unique challenges and needs of people 
     in rural areas and smaller communities living with or 
     affected by HIV/AIDS. Increased stigma and discrimination, transportation to 
     HIV-specific medical services and support and 
     lack of up-to-date HIV education were identified as areas needing attention.</p>

     <br><br><p>
     </p>

        </div>
        <br><br>
        <div id="com5p" style="height:400px">
        <h2 class="bTitle">Anonymous Testing Near You</h2><div class="detailvo">
        <h3>London Intercommunity Health Centre's Options Clinic provides <br>
        free and anonymous HIV testing at several locations in London. 
        To book an appointment call <br>(519) 673-4427 or 
        text Richard (226) 235-1247 or Destini (519) 719-4448. <br>
        They will respond to you within 24 hours from Monday to Friday.</h3>
        <img src="images/test.jpg" style="height: 300px"></div>
        </div>`,
        data(){return {
            price:[{title:'v', subtitle:['subtitle1'],text:['textexte11']},
            {title:'pm', subtitle:['iiiiiii'],text:['vtextetxte22']},
            {title:'de', subtitle:['hhhhhhhhhh'],text:['texttexte3']}],
             }},
      

    };


    let aboutcomponent = {template:`<div>
        <h2>About US</h2>


   
    </div>`};




    //path 映射表
    let routes =[
       {path:'/signup', component:signupcomponent},
       {path:'/home', component:homecomponent},
       {path:'/community', component:communitycomponent},
       {path:'/about', component:aboutcomponent},
       



    ];


//引入Vue-router 自带vueRouter类
    let router = new VueRouter({
    //mode:'history', //h5
    routes,
    linkActiveClass:'active'//change default class name （router-link-active)

    });




    let vm = new Vue({
        el: '#app',
        //components:{videocomponent,logincomponent,homecomponent },

        data: {
            msg: "hahahahah!"
        },

        created: function() {
            
        },

        methods: {
          
        },

      //把component path 注入到vm里
         router: router 
    });
