<div class="my-body unselectable">
  <div class="card container mt-2">
      <h3 class="mt-2">Career Goals</h3>
      <hr>
      <h5 class="mt-2">Short Term Goals</h5>
          <p>Within the next 3 months, I aim to improve my proficiency in a specific programming language, such as Node js, Angular and Python, by completing an online course or tutorial and building a small project using that language</p>
      <hr>
      <h5 class="mt-2">Long Term Goals</h5>
          <!-- <p>My long term goal is to be in respectable position in my role, and I will keep pushing my self to work hard so I can step up in the next level of my life.</p> -->
          <p>Within the next five years, I aim to become a technical lead for a software development team at a major tech company, where I will be responsible for leading the development of innovative and impactful software solutions.</p>
      <hr>
      <h5>My Career Goals</h5>
        <ul class="b">
          <li>Develop proficiency in a new programming language or technology within the next 12 months.</li>
          <li>Improve my skills in software design and architecture to become a better software engineer.</li>
          <li>Gain expertise in developing applications.</li>
          <li>Develop a strong understanding of Agile and other software development methodologies.</li>
          <li>Continuously improve my coding skills by practicing regularly and participating in code reviews.</li>
        </ul>
        <hr>
      <h5>My Career Certificates</h5>
        <div class="row"> 
          <div class="column">
            <img src="images/assoc.jpg" alt="Assoc" style="100%">
          </div>
          <div class="column">
            <img src="images/degree.jpg" alt="Assoc" style="100%">
          </div>
          <div class="column">
            <img src="images/aws.jpg" alt="Assoc" style="100%">
          </div>
        </div>
      <hr>
      <h5>My Other Learning Goals</h5>
        <ul class="b">
          <li>Nodejs</li>
          <li>Angular</li>
          <li>Pyhton</li>
          <li>IONIC</li>
          <li>AWS</li>
        </ul>
      <hr>
      <?php include 'entries_list.php';?>
      <br>
</div>
<script>
  let allImages = document.querySelectorAll("img");
allImages.forEach((value)=>{
    value.oncontextmenu = (e)=>{
        e.preventDefault();
    }
})
</script>