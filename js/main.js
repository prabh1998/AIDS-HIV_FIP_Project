
    let signupcomponent = {template:`<div id="signupArea">
        
    <div class="container">
    <div class="row">
    <div class="col">

        <img src="images/mesum.jpg" style="width:450px"></div><br>
<div class="col"> 
        <form action="admin/signned_up_page.php"  method="post">
        <h2 style="color:skyblue">Let’s Start From Sign Up!</h2>
    <fieldset style="width: 300px;"><br>        
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




    //path 映射表
    let routes =[
       {path:'/signup', component:signupcomponent},
       



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
