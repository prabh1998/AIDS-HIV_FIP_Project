


    let signupcomponent = {template:`<div id="signupArea">
        <div class="banner">
          <img src="images/ccbanner.jpg">
          </div>
    <div class="container">
    <div class="row">
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
    <div id="context">
  
    <p>Thank you for your interest in our progressive educational platform. <br>
    We look forward to providing you current and accurate information <br>
    about HIV/AIDS, Harm Reduction, and Hepatitis C. Due to the high <br>
    volume of presentation requests we receive, we recommend you submit <br>
    your request at least 2 weeks prior to the proposed presentation date.<br></p>
    <h3>Address:  #30-186 King Street, London, ON, N6A 1C7<br>
    Phone:  519-434-1601 <br>
    Email:  info@hivaidsconnection.ca<br>
    Fax:  519-434-1843<br></h3></div>
  </div>`,

        data() {return {input: {firstname: "", lastname: "", email:"",country:""}}},
        methods:{
        }


      };


    let homecomponent = {template:`<div>
        
    <div class="banner">
        <img src="images/banner2.jpg" >
        </div>

<br><br>

<div class="container" >
  <div class="row">
<div class="col">

<div class="col" id="mapTextB">
        <h3>HIV and Youth</h3>
        <br>
        <div id="hivtext">
        <br><br><br><p id="mapText">Currently, over 30% of all new HIV infections globally are estimated to occur among youth ages 15 to 25 years. Also, increasingly, children infected at birth grow into adolescents who have to deal with their HIV positive status. Combining the two, there are 5 million youth living with HIV.<p>
        </div></div>
      
<div class="container1" >
  <div class="row">
<div class="col">
            <div class="col" id="mapTextB">
            <div class="detailvo">
          <h3>Community<br>Programs</h3>
          <p>Get Tested:<br>
          HIV Testing <br>
          Hepatitis C Testing<br></p>
            
            <br><br>
            <h3>TOPICS WE CAN SPEAK ABOUT: </h3>
            <p>HIV/AIDS Basics.<br>
            Hepatitis C Basics<br>
            Harm Reduction<br></p>
            <h3>Events Calendar</h3><br>
            <p>Couch Crew
            <br>Coffee Drop-In            <br>
            PrEP Clinic<br>
            Opening Celebration</p><br></div>
            <br><br></div>
</div>
            <div id="volunpart" >
            <h2>OUR VISION - Volunteer</h2>
            <img src="images/v1.jpg">
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
    <div class="banner">
    <img src="images/cbanner.jpg" >
    </div>
    <div id="comhead">
      <div>
      <br><br>
      <div id="com1p" style="height:500px">
<br><br><h2 class="bTitle">WHAT IS HIV/AIDS?</h2>

<br>
<div id="detailvo1">
      <p><br>HIV stands for human immunodeficiency virus - a virus that weakens the immune system.
      AIDS stands for acquired immune deficiency syndrome - an advanced form of the disease caused by HIV. Not all people living with HIV will develop AIDS.
      There are five bodily fluids that can have enough HIV to transmit the virus:
      <br>
      Blood<br>
      Semen<br>
      Anal fluids/mucous<br>
      Vaginal fluids<br>
      Breast milk<br><br></p>
      <img src="images/boy.png" style="height: 300px">
      </div>
      
</div>

      
</div>
</div>  
<br><br>
<div id="com2p" style="height:400px"> 
<h2 class="bTitle">WHAT IS HEPATITIS C?</h2>
      <div class="detailvo">
      <p><br><br>Hepatitis C (Hep C) is a chronic liver <br>
      disease caused by the Hepatitis C virus <br>
      (HCV).<br>
      HCV causes inflammation 
      and scarring of the liver.<br>
      Hepatitis C is NOT spread through any 
      other bodily fluids such as:<br>
      <br>saliva
      <br>sweat
      <br>semen
      <br>vaginal fluids
      <br>urine
      <br>breast milk, etc.<br><br><br></p>

      
      <img src="images/test.jpg" style="height: 300px"></div>
      
      </div>
<br><br>

      <div class="com3p" style="height:420px">
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
      <div class="com3p1" style="height:420px">
      <h2 class="bTitle">WHY IS REGIONAL HIV/AIDS CONNECTION (RHAC) IN YOUR COMMUNITY?</h2>
      <div class="detailvo">
      
      <p>In 2006, an HIV/AIDS community planning report commissioned <br>
      by the AIDS Bureau at the Ontario Ministry of Health was <br>
      completed using input from people involved in HIV/AIDS <br>
      work in London and surrounding counties.</p>
      <img src="images/about1.jpg" style="height: 300px"></div><br>
      
        </div>
      
        <br><br>
        <div id="com5p" style="height:300px"><p>
        <br>London Intercommunity Health Centre's Options Clinic provides <br>
        free and anonymous HIV testing at several locations in London. <br>
        To book an appointment call (519) 673-4427 or <br>
        text Richard (226) 235-1247 or Destini (519) 719-4448.<br> 
        They will respond to you within 24 hours from Monday to Friday.<br></p>
        </div>
        </div>`,
        data(){return {
            price:[{title:'v', subtitle:['subtitle1'],text:['textexte11']},
            {title:'pm', subtitle:['iiiiiii'],text:['vtextetxte22']},
            {title:'de', subtitle:['hhhhhhhhhh'],text:['texttexte3']}],
            }},
      

    };


    let aboutcomponent = {template:`<div>
    
        
        <div class="banner">
        <img src="images/bannerkids.jpg" >
        </div><br><br>
        <div class="a1">
        <h2>About US</h2>
        <img src="images/logo.png" style="width:500px">
        </div>
        <div id="a2">
        <img src="images/group.jpg" style="width:500px">
        <P><br><br>We are community-inspired and dedicated to<br> positively impacting the lives of individuals<br> and diverse communities living with, at-risk for,<br> or affected by HIV/AIDS and Hepatitis C (HCV).</p>
        </div>
  
        <br><br>
        <div id="aboutp2">
        <div id="a1">
        <img src="images/boy_icon.png" style="width:300px">
        <h2><br>WHAT WE DO</h2>
        </div>
        <p>Our service users include people living with HIV/AIDS
        and HCV, <br>their partners/family/friends, 
        <br>as well as those concerned about 
        HIV/AIDS and HCV <br>or at risk for HIV. 
        We also work with anyone who provides services <br>to people with, 
        or at risk for, HIV and HCV. All services are<br> free and confidential.<p>
        </div>
      <br>
        <div id="homeImg">
        <img src="images/a4.jpeg" style="width: 1100px" ></div>
        <div id="aboutp3">
        <img src="images/a1.png" style="width: 300px" >
        <img src="images/a2.png" style="width: 300px" >
        <img src="images/a3.png" style="width: 300px" >
        </div>
        <br><br>
        <div id="aboutp4">
        <h3>WHAT WE AIM TO DO</h3><br>
        <p>ncrease access to medical, practical and psychosocial services 
        for people living with or <br>affected by HIV/AIDS.<br>Integrate
        and coordinate programs and services <br>for People Living <br>with HIV/AIDS (PHAs).
        <br>Provide HIV/AIDS educational and outreach materials 
        <br>to the community.Establish partnerships to strengthen 
        <br>our ability to provide effective services in each community.<br><br></p>

        </div>
      <br><br>
        <div id="aboutp5">
        <br><br>
        <p>OUR VALUE STATEMENT<br>
        The courage to do what is right.</p><br><br>
        </div>

  
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
