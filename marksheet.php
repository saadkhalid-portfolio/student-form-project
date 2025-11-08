<!DOCTYPE html>
<html>
  <head>
    <title>Student Form</title>
      <style>
        /* Styling for the form container */
        form {
          max-width: 500px; /* Limit the width of the form */
          margin: 20px auto; /* Center the form on the page with some top/bottom margin */
          padding: 30px;
          background-color: #f9f9f9;
          border: 1px solid #ddd;
          border-radius: 8px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Styling for labels */
        label {
          display: block; /* Make labels take up full width */
          margin-bottom: 8px;
          font-weight: bold;
          color: #333;
        }

        /* Styling for all common input types (text, email, password, number, etc.) and textarea */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        textarea {
          width: 100%; /* Full width within the form container */
          padding: 12px;
          margin-bottom: 20px; /* Space between fields */
          border: 1px solid #ccc;
          border-radius: 5px;
          box-sizing: border-box; /* Include padding and border in the element's total width and height */
          font-size: 16px;
        }
        .subject_section input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        textarea {
          width: 40%; /* Full width within the form container */
          padding: 8px;
          margin-bottom: 10px; /* Space between fields */
          border: 1px solid #ccc;
          border-radius: 5px;
          box-sizing: border-box; /* Include padding and border in the element's total width and height */
          font-size: 8px;
        }


        .subject_section  {
          display: flex; 
          /* display: none; */
          align-items: center; /* Vertically centers the items */
          gap: 4px; /* Adds space between the h2 and button */
          margin-bottom: 20px;
        }

        /* Specific styling for textarea */
        textarea {
          resize: vertical; /* Allow vertical resizing only */
          min-height: 100px;
        }

        /* Styling for input fields on focus */
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="number"]:focus,
        textarea:focus {
          border-color: #007bff; /* Highlight border on focus */
          outline: none; /* Remove default outline */
          box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Add a subtle shadow */
        }

        /* Styling for the submit button */
        button[type="submit"] {
          background-color: #28a745;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
          font-size: 18px;
          transition: background-color 0.3s ease; /* Smooth transition on hover */
          width: 100%;
        }

        /* Hover effect for the submit button */
        button[type="submit"]:hover {
          background-color: #218838;
        }

        /* Styling for select elements */
        select {
          width: 100%;
          padding: 10px;
          margin-bottom: 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          background-color: white;
          font-size: 16px;
          box-sizing: border-box;
        }

        /* Styling for checkboxes and radio buttons (adjust as needed for specific layouts) */
        input[type="checkbox"],
        input[type="radio"] {
          margin-right: 8px;
        }

        /* Styling for fieldsets and legends */
        fieldset {
          border: 1px solid #ddd;
          padding: 20px;
          margin-bottom: 20px;
          border-radius: 8px;
        }

        legend {
          font-weight: bold;
          padding: 0 10px;
          color: #555;
        }

        #add_subject {
          display: inline-block;
          border-radius: 30%;
          color: blue; 
          font-size: 20px; 
          font-weight: bold;

        }
        h2{
          display: inline-block; 
          margin-right: 200px;
        }

        #preview img{
          width : 150px;
          height: 150px;
        }

        #imgdiv{
          display : flex;
          align-items: center; /* Vertically centers the items */
          gap: 4px;
        }

        #preview{
          display : flex;
          align-items: center; 
          gap: 4px;
        }

        #delimg{
          color: red;
          margin-bottom : 125px;
          padding-top : 2px;
          border-radius : 50px
        }

        #add_images {
          background-color: #4CAF50; /* Green color */
          color: white;
          border: none;
          padding: 10px 18px;
          border-radius: 8px;
          font-size: 16px;
          cursor: pointer;
          transition: all 0.3s ease;
          box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        /* Hover effect */
        #add_images:hover {
          background-color: #45a049;
          transform: scale(1.05);
        }

        /* Optional: focus/active state */
        #add_images:active {
          transform: scale(0.97);
          background-color: #3e8e41;
        }
        .image_div {
          display: flex;
          flex-direction: column;
          align-items: flex-start;
          margin-bottom: 15px;
          gap: 10px;
        }

        .input_btn_div {
          display: flex;
          align-items: center;
          gap: 10px;
        }

        .input_btn_div input[type="file"] {
          padding: 5px;
        }

        .delimg {
          background: red;
          color: white;
          border: none;
          border-radius: 5px;
          padding: 5px 10px;
          cursor: pointer;
        }

        .delimg:hover {
          background: darkred;
        }

        .image_div img {
          border: 1px solid #ccc;
          border-radius: 8px;
          width: 150px;
          height: 150px;
          object-fit: cover;
        }


      </style>
  </head>
  <body>

    <form method="post" action="st_marksheet.php" enctype="multipart/form-data">
      <fieldset>
        <legend>Student Information</legend>
        <label for="st_name">Student Name</label>
        <input type="text" name="st_name" id="st_name" placeholder="Enter Student Name" required><br>
        <label for="f_name">Father Name</label>
        <input type="text" name="f_name" id="f_name" placeholder="Enter Father Name" required><br>
        <label for="st_number">Student Number</label>
        <input type="text" name="st_number" id="st_number" placeholder="Enter Number" required><br>
        <label for="age">Select Age</label>
        <select name="age" id="age" required>
          <option value="" selected>Choose Age</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
        </select><br>
        <label for="class">Select Class</label>
        <select name="class" id="class" required>
          <option value="" selected>Choose Class</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select><br>
        <div id ="imgdiv" >
          <div>
            <label for="st_pic">Student Picture</label>
            <input type="file" name="st_pic" id="st_pic" required><br><br>
          </div>
          <div id="preview"></div>
        
        </div>
        <div>
          <h2>Add Subject Marks</h2>
          <button id="add_subject">&#x2B</button>
        </div>
        <div id="parent_subject_section"></div>
        <!-- multiple images -->
        <div>
          <button id="add_images">Add More Images +</button>
        </div><br>
        <div id="images_container"></div><br><br>
        <button type="submit" name="submit">Submit</button>
      </fieldset>
    </form>

    
    <script>
      // document.getElementById("add_subject").addEventListener( 'click',function(e){
      //   e.preventDefault();
      //   document.getElementById("subject_section").style.display='flex';
      // });

      // var dup_sub_sec = "";
      document.getElementById("add_subject").addEventListener( 'click',function(e){
        e.preventDefault();
        const parent_subject_section = document.getElementById("parent_subject_section");
        const div = document.createElement('div');
        div.classList.add('subject_section');
        div.innerHTML = `
                <input type="text" name="sub_name[]" id="sub_name"  placeholder="Enter Subject Name" required>
                <input type="number" name="sub_marks[]" id="sub_marks"  placeholder="Enter Subject Marks" required>
                <input type="number" name="ob_marks[]" id="ob_marks"  placeholder="Enter Obtain Marks" required>
                <button  class="delete_subject"  style="margin-bottom: 10PX;">X</button>
        `;
          parent_subject_section.appendChild(div);
        // console.log(div);

          div.querySelector(".delete_subject").addEventListener('click',function(e){
            e.stopPropagation();
            e.preventDefault();
            div.remove();
            // console.log(ppp);
          });

      });

      const st_pic = document.getElementById("st_pic");
      const preview = document.getElementById("preview");
      // let currentfile = null;

      st_pic.addEventListener('change',function(e){
          const file = e.target.files[0];
          preview.innerHTML = "";

          if (file) {
          // currentfile = file;
          const img = document.createElement('img');
          img.src = URL.createObjectURL(file);
          img.alt = 'Preview';

          preview.appendChild(img);


          const delimg = document.createElement('button');
          // delimg.classList.add('delimg');
          delimg.id = 'delimg';
          delimg.innerText = 'X';
          preview.appendChild(delimg);

          delimg.addEventListener('click',function(){
            preview.innerHTML = '';
            st_pic.value = '';
            // currentfile = null;
          });


        } 
      });
      

      const add_images = document.getElementById('add_images');
      const images_container = document.getElementById('images_container');
      
      add_images.addEventListener('click',function(e){
        e.preventDefault();
        const image_div =document.createElement('div');
        image_div.classList.add('image_div');
        // image_div.style.backgroundColor = "red";

        const input_btn_div = document.createElement('div');
        input_btn_div.classList.add('input_btn_div');
        
        const image_field = document.createElement('input');
        image_field.type = 'file';
        image_field.name = 'images[]';
        image_field.accept = 'image/*';
        // image_div.appendChild(image_field);

        const del_image = document.createElement('button');
        del_image.innerText = 'X';
        del_image.classList.add('delimg');
        // image_div.appendChild(del_image);
        
        del_image.addEventListener('click',function(e){
          e.preventDefault();
          image_div.remove();
        });


        image_field.addEventListener('change',function(e){
          const file = e.target.files[0];

          const child = image_div.children[1];
          console.log(child);
          if (child){
            child.remove();
          }
          
          if(file){
            
            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.alt = 'Preview';
            img.width = 150;
            img.height = 150;
            image_div.appendChild(img);
          }
          
        });

        input_btn_div.appendChild(image_field);
        input_btn_div.appendChild(del_image);
        image_div.appendChild(input_btn_div);

        images_container.appendChild(image_div);
      });




    </script>

  </body>
</html>
