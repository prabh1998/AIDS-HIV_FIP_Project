


    let signupcomponent = {template:`<div id="signupArea">
        
    <div class="container">
    <div class="row">
    <div class="col">
    
   
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
            // signin(){
            //     console.log("trying to sign in");
            //     let formData = new FormData();
            //     formData.append("firstname", this.input.firstname);
            //     formData.append("lastname", this.input.lastname);
            //     formData.append("email", this.input.email);
            //     formData.append("country", this.input.country);

            //      let url = `./admin/signned_up_page.php`;
            //      fetch(url, {method: 'POST',body: formData})
            //      .then(res => res.json())
            //      .then(data =>{})
            //      .catch(function(error){console.error(error);}
            // }
        }


      };


    let homecomponent = {template:`<div>
        
        <div id="homeImg">
      
        </div>

       <div id="homeP"> 
      <h2  class="display-4">HIV&AIDS</h2>
      <hr class="my-4">
        <p class="lead"></p>
       
        </div>

<div class="container" >
  <div class="row">
 <div class="col">

 <div class="col" id="mapTextB">

        <h3>WHAT WE DO</h3>
        <p id="mapText">We are community-inspired and dedicated to positively impacting the lives of individuals and diverse communities living with, at-risk for, or affected by HIV/AIDS and Hepatitis C (HCV). 

        Regional HIV/AIDS Connection (RHAC) serves the counties of Perth, Huron, Elgin, Lambton, Middlesex, and Oxford.</p></div>

</div></div>

 
    <br><br>
    

  <div class="container">
  <div class="row">
  <div class="col">


   
    </div>`};



    let aboutcomponent = {template:`<div>

<br><br><h3 class="sTitle">OUR MANDATE</h3>
       <h2 class="bTitle"> Improve quality of life for those living with & affected by HIV/AIDS
       Reduce the number of new HIV infections
       Increase community awareness about HIV/AIDS</h2><br><br>
       <h3 class="sTitle">WHAT WE OFFER</h3>
       <p> Practical support, counselling services, and programming to 
       diverse populations of people living with and affected by issues 
       related to HIV/AIDS.
       Education and resources related to safer sex, 
       HIV acquisition, HIV/AIDS and/or Hep C-related 
       stigma and discrimination, HIV and Hep C testing, disclosure 
       (telling people about your HIV/HCV status) among other topics. 
       Needle and syringe program for injection drug users to  reduce 
       the transmission of HIV, HCV, and other blood-borne  infections.
       Strong relationships with people in our communities 
       such as other community organizations, 
       people interested in HIV/AIDS & hep C information and 
       volunteers who help us meet our mission through fundraising.</p>
  



 </div>
 </div>      
        
        
        
        </div>`,
        data(){return {
            price:[{title:'v', subtitle:['subtitle1'],text:['textexte11']},
            {title:'pm', subtitle:['iiiiiii'],text:['vtextetxte22']},
            {title:'de', subtitle:['hhhhhhhhhh'],text:['texttexte3']}],
             }},
      

    };



    //path 映射表
    let routes =[
       {path:'/signup', component:signupcomponent},
       {path:'/home', component:homecomponent},
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
