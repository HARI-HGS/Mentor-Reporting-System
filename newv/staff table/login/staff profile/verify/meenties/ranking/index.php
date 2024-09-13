
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta name = "viewport" content="with=device-width , initial-scale=1.0">
<title>University website Design</title> 
    <link rel="stylesheet" type="text/css" href="box style.css">
    <link rel="stylesheet" href="box.html">
    <link rel="stylesheet" href="staff profile style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>

<body>
    <section class="header">
        <nav>
        <div class="logo">
         <img src="logo.jpg" alt="logo"></a> <!-----collage logo-->
        </div>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="http://localhost:8080/project/newup/" class="active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Course</a></li>
                    <li><a href="http://localhost:8080/project/newup/staff%20table/staff%20table.php">Staff</a></li>
                    <li><a href="#">Students</a></li>
                    
                </ul>
            </div>
        </nav>
		<!--<marquee direction="left" scrollamount="5">
			<h3>Welcome to my website!</h3></marquee><br>-->
		<div class="container">
            <div class="center">
                <!--<div class="box2"><p style="text-align: center;">News</p><br>-->
                <div><?php
                /*
    function mark($db_name, $table_name, $column_name) {
        $conn = mysqli_connect('localhost', 'root', '', $db_name);
        $count = 0;
        $query = "SELECT COUNT(*) FROM $table_name WHERE $column_name IS NOT NULL";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $count = $row[0];
        return $count;
    }
    
*/
function get($db_name, $table_name, $column_name) {
  $conn = mysqli_connect("localhost", "root", "", $db_name);
  $result = mysqli_query($conn, "SELECT $column_name FROM $table_name");
  $col = array();
  while ($row = mysqli_fetch_array($result)) {
    $col[] = $row[$column_name];
  }
  mysqli_close($conn);
  return $col;
}
    function mark($db_name) {
        $conn = mysqli_connect('localhost', 'root', '', $db_name);
        $count1 = 0;
        $count2 = 0;
        $count3 = 0;
        $count4 = 0;
        
        $query1 = "SELECT COUNT(*) FROM filedownload WHERE filename IS NOT NULL";
        $query2 = "SELECT COUNT(*) FROM filepaper WHERE paper IS NOT NULL";
        $query3 = "SELECT COUNT(*) FROM filesports WHERE sports IS NOT NULL";
        $query4 = "SELECT COUNT(*) FROM fileworkshop WHERE workshop IS NOT NULL";
        
        $uploaded_values1 = get($db_name, 'filenptel', 'nptel');
        $uploaded_values2 = get($db_name, 'fileattend', 'attend');
        $uploaded_values3 = get($db_name, 'fileproject', 'project');
        

        $updated_value1 = array_sum($uploaded_values1);
        $updated_value2 = array_sum($uploaded_values2);
        $updated_value3 = array_sum($uploaded_values3);
        

        $result1 = mysqli_query($conn, $query1);
        $result2 = mysqli_query($conn, $query2);
        $result3 = mysqli_query($conn, $query3);
        $result4 = mysqli_query($conn, $query4);
        
        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);
        $row3 = mysqli_fetch_array($result3);
        $row4 = mysqli_fetch_array($result4);
        
        $count1 = $row1[0];
        $count2 = $row2[0];
        $count3 = $row3[0];
        $count4 = $row4[0];
        
        $count = $count1 + $count2*1.5 + $count4*1.5 + $count3*1.5 + $updated_value1 + $updated_value2 + $updated_value3;
        
        return $count;
    }
    

    function grades($count){
        
        
        
            if ($count > 50) {
                return $grade = "O";
            } elseif ($count > 40) {
                return $grade = "A+";
            } elseif ($count > 30) {
                return $grade = "A";
            } elseif ($count > 20) {
                return $grade = "B+";
            } elseif ($count > 10) {
                return $grade = "B";
            } elseif ($count > 0) {
                return $grade = "F";
            } elseif ($count == 0) {
                return "null";
            }
        
        
    }
    
    function details($db_name,$table_name,$column_name,$name_input){
        $conn = mysqli_connect("localhost", "root", "",$db_name);
        $result = mysqli_query($conn, "SELECT $column_name FROM $table_name WHERE $column_name=$column_name");
        $col = mysqli_fetch_array($result);
        return $col[$column_name];

       

    }
      
    // Calculate counts for each student for each category
    $counts_internship = array(
        details('meentiesname','meenties1','name1','name1') => mark('jairam'),
        /*details('meentiesname','meenties1','name2','name2') => mark('hari'),*/
        details('meentiesname','meenties1','name3','name3') => mark('example'),
 
        details('meentiesname','meenties1','name4','name4') => mark('data4'),
        details('meentiesname','meenties1','name5','name5') => mark('data5'),
        details('meentiesname','meenties1','name6','name6') => mark('data6'),
 
        details('meentiesname','meenties1','name7','name7') => mark('data7'),
        details('meentiesname','meenties1','name8','name8') => mark('data8'),
        details('meentiesname','meenties1','name9','name9') => mark('data9'),
 
        details('meentiesname','meenties1','name10','name10') => mark('data10'),
        details('meentiesname','meenties1','name11','name11') => mark('data11'),
        details('meentiesname','meenties1','name12','name12') => mark('data12'),
 
        details('meentiesname','meenties1','name13','name13') => mark('data13'),
        details('meentiesname','meenties1','name14','name14') => mark('data14'),
        details('meentiesname','meenties1','name15','name15') => mark('data15'),
 
        details('meentiesname','meenties1','name16','name16') => mark('data16'),
        details('meentiesname','meenties1','name17','name17') => mark('data17'),
        details('meentiesname','meenties1','name18','name18') => mark('data18'),
 
        details('meentiesname','meenties1','name19','name19') => mark('data19'),
        details('meentiesname','meenties1','name20','name20') => mark('data20'),
/*
       details('meentiesname','meenties2','name1','name1')=> mark('data21'),
       details('meentiesname','meenties2','name2','name2') => mark('data22'),
       details('meentiesname','meenties2','name3','name3') => mark('data23'),

       details('meentiesname','meenties2','name4','name4') => mark('data24'),
       details('meentiesname','meenties2','name5','name5') => mark('data25'),
       details('meentiesname','meenties2','name6','name6') => mark('data26'),

       details('meentiesname','meenties2','name7','name7') => mark('data27'),
       details('meentiesname','meenties2','name8','name8') => mark('data28'),
       details('meentiesname','meenties2','name9','name9') => mark('data29'),

       details('meentiesname','meenties2','name10','name10') => mark('data30'),
       details('meentiesname','meenties2','name11','name11') => mark('data31'),
       details('meentiesname','meenties2','name12','name12') => mark('data32'),

       details('meentiesname','meenties2','name13','name13') => mark('data33'),
       details('meentiesname','meenties2','name14','name14') => mark('data34'),
       details('meentiesname','meenties2','name15','name15') => mark('data35'),

       details('meentiesname','meenties2','name16','name16') => mark('data36'),
       details('meentiesname','meenties2','name17','name17') => mark('data37'),
       details('meentiesname','meenties2','name18','name18') => mark('data38'),

       details('meentiesname','meenties2','name19','name19') => mark('data39'),
       details('meentiesname','meenties2','name20','name20') => mark('data40'),

       details('meentiesname','meenties3','name1','name1') => mark('data41'),
       details('meentiesname','meenties3','name2','name2') => mark('data42'),
       details('meentiesname','meenties3','name3','name3') => mark('data43'),

       details('meentiesname','meenties3','name4','name4') => mark('data44'),
       details('meentiesname','meenties3','name5','name5') => mark('data45'),
       details('meentiesname','meenties3','name6','name6') => mark('data46'),

       details('meentiesname','meenties3','name7','name7') => mark('data47'),
       details('meentiesname','meenties3','name8','name8') => mark('data48'),
       details('meentiesname','meenties3','name9','name9') => mark('data49'),

       details('meentiesname','meenties3','name10','name10') => mark('data50'),
       details('meentiesname','meenties3','name11','name11') => mark('data51'),
       details('meentiesname','meenties3','name12','name12') => mark('data52'),

       details('meentiesname','meenties3','name13','name13') => mark('data53'),
       details('meentiesname','meenties3','name14','name14') => mark('data54'),
       details('meentiesname','meenties3','name15','name15') => mark('data55'),

       details('meentiesname','meenties3','name16','name16') => mark('data56'),
       details('meentiesname','meenties3','name17','name17') => mark('data57'),
       details('meentiesname','meenties3','name18','name18') => mark('data58'),

       details('meentiesname','meenties3','name19','name19') => mark('data59'),
       details('meentiesname','meenties3','name20','name20') => mark('data60') */
    );
    
    arsort($counts_internship);
    ?>

    <main class="table">
    <div class="confetti-container">
        <section>
        <br><p style="text-align: center;">
        <span class="text one" >R</span>
        <span class="text two">A</span>
        <span class="text three">N</span>
        <span class="text four">K</span>
        <span class="text five">I</span>
        <span class="text six">N</span>
        <span class="text seven">G</span>
        </p>
        </section>

        <section class="table__body">
  <table >
    
    <thead style="background-color: #d5d1defe;">
      <tr>
        <th>S.no <span class="icon-arrow">&DownArrow;</span></th>
        <th>Name</th>
        <th>Mark <span class="icon-arrow">&DownArrow;</span></th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      arsort($counts_internship);
      $first_key = array_key_first($counts_internship);
      $gold_name = $first_key;
      $gold_marks = $counts_internship[$first_key];
      array_shift($counts_internship);
      ?>
      <tr class="gold">
        <td><?php echo $i; ?></td>
        <td><?php echo $gold_name; ?></td>
        <td><?php echo $gold_marks; ?></td>
        <td><?php echo grades($gold_marks); ?></td>
      </tr>
      <?php
      $i = 2;
      $second_key = array_key_first($counts_internship);
      $silver_name = $second_key;
      $silver_marks = $counts_internship[$second_key];
      array_shift($counts_internship);
      ?>
      <tr class="silver">
        <td><?php echo $i; ?></td>
        <td><?php echo $silver_name; ?></td>
        <td><?php echo $silver_marks; ?></td>
        <td><?php echo grades($silver_marks); ?></td>
      </tr>
      <?php
      $i = 3;
      $third_key = array_key_first($counts_internship);
      $bronze_name = $third_key;
      $bronze_marks = $counts_internship[$third_key];
      ?>
      <tr class="bronze">
        <td><?php echo $i; ?></td>
        <td><?php echo $bronze_name; ?></td>
        <td><?php echo $bronze_marks; ?></td>
        <td><?php echo grades($bronze_marks); ?></td>
      </tr>
      <?php
    $i = 3;
    arsort($counts_internship);
    foreach ($counts_internship as $student => $count) : 
      if ($i > 3) { // only print rows for ranking beyond 3rd place
    ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $student; ?></td>
        <td><?php echo $count; ?></td>
        <td><?php echo grades($count); ?></td>
      </tr>
      <?php
    } else {
      $i++;
    } endforeach; ?>
    </tbody>
  </table>
</section></div>
              
      
            
            
            </div>
            <div class="box4">
            <marquee direction="left" scrollamount="15" >
			<h3 style="font-family: 'VT323', monospace;color: #EBB55F;font-size: 20px;"><?php echo "🥳🎉Congratulation ".$gold_name;?></h3></marquee><br></div>
                
                <div class="box3"><p style="text-align: center;">
                <span class="text one">N</span>
        <span class="text two">E</span>
        <span class="text three">W</span>
        <span class="text four">S</span>
        </p>
<?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM filenews ORDER BY id DESC"); foreach ($rows as $row) :?><p class="glowIn"><?php echo $i++."."; echo $row["news"]; ?></p><br>
  <?php endforeach; ?></div></div>
                 <div class="right">
            
            
            <div class="box1"><p style="text-align: center;">
            <span class="text one">S</span>
        <span class="text two">T</span>
        <span class="text three">U</span>
        <span class="text four">D</span>
        <span class="text five">E</span>
        <span class="text six">N</span>
        <span class="text seven">T</span>
        </p><?php $i = 1; $rows = mysqli_query($conn, "SELECT * FROM placed ORDER BY id DESC"); ?>
            <style>
    table {
        border-collapse: collapse;
        margin: 0 auto;
        width: 100%;
    }
    th, td {
        padding: 10px;
    }
    .thead_body {
  
  top: 0;
  left: 0;
  
  cursor: pointer;
  text-transform: capitalize;
}
</style>

<table>
    <thead>
        <tr class="thead_body">
            <th>S.no</th>
            <th>Name</th>
            <th>Company</th>
            <th>LPA</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["company"]; ?></td>
            <td><?php echo $row["lpa"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


        </div>
        <div class="box1"><p style="text-align: center;">
        <span class="text one">E</span>
        <span class="text two">V</span>
        <span class="text three">E</span>
        <span class="text four">N</span>
        <span class="text five">T</span>
        <span class="text six">S</span>
        <p>
      
            </div>
        <div class="box1"><p style="text-align: center;">
        <span class="text one">Y</span>
        <span class="text two">O</span>
        <span class="text three">U</span>
        <span class="text four">T</span>
        <span class="text five">U</span>
        <span class="text six">B</span>
        <span class="text seven">E</span>
        </p>

        <?php if($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }
        $sql = "SELECT * FROM youtube";
        $result = $conn->query($sql);
        $i = 1;
        if($result->num_rows > 0) { 
          while($row = $result->fetch_assoc()) { ?>
          <div style="display: inline-block;">
          
          <p><?php echo $i++.". ";?>www.<span class="type-animation animating"><?php echo $row['name'];?></span>.com<a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-info btn-sm" style="margin-left: 10px; text-decoration: none;">click here</a></p>
        </div><br>
    
  <?php }  } ?></div></div></div>
        </div>
    </section>
</body>
<script>
    let glowInTexts = document.querySelectorAll(".glowIn");
    glowInTexts.forEach(glowInText => {
        let letters = glowInText.textContent.split("");
        glowInText.textContent = "";
        letters.forEach((letter, i) => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.style.animationDelay = `${i * 0.05}s`;
            glowInText.append(span);
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>

    <script>
      const timeline = gsap.timeline({ repeat: -1 });
const chars = document.querySelectorAll(".text");

gsap.set(".one", { color: "red" });
gsap.set(".two", { color: "black" });
gsap.set(".three", { color: "pink" });
gsap.set(".four", { color: "green" });
gsap.set(".five", { color: "yellow" });
gsap.set(".six", { color: "red" });
gsap.set(".seven", { color: "black" });
gsap.set(".eight", { color: "pink" });
gsap.set(".nine", { color: "yellow" });
gsap.set(".ten", { color: "blue" });

timeline.from(chars, { opacity: 1, scale: 0, ease: "sine", delay: 0.25}).
to(".text", {
"--font-weight": 900,
duration: .9,
ease: "sine.inOut",
stagger: {
yoyo: true,
each: 0.1,
repeat: -1 } },

1);
  </script>
  <script>
    console.clear();

const EffectConfetti = (() => {
	function EffectConfetti(config) {
		this.config = Object.assign({}, C.DefaultConfig, config);
	}
	const C = EffectConfetti, P = Object.assign(C.prototype, {constructor: C});
	C.DefaultConfig = {
		colors: ['#EF2964', '#00C09D', '#2D87B0', '#48485E','#EFFF1D'],
		anims: ['slow', 'medium', 'fast'],
		size: 10,
		interval: 16, timeout: 3000,
		posJitter: 0, angJitter: 0, distJitter: 0, sizeJitter: 0,
	};
	C.getJitter = jitter => Math.round((Math.random() - 0.5) * jitter);
	C.getAngDist = ([x0, y0], [x1, y1]) => {
		let dx = x0 - x1, dy = y0 - y1;
		return [
			Math.atan2(dy, dx) * 180 / Math.PI + 90,
			Math.round(Math.sqrt(dx * dx + dy * dy))
		];
	};
	P.fireConfetti = function(from, to) {
		const {parent, colors, anims, timeout, posJitter, angJitter, distJitter, size, sizeJitter} = this.config;
		let x = from[0] + C.getJitter(posJitter), y = from[1] + C.getJitter(posJitter),
				dx = x - to[0], dy = y - to[1],
				anim = anims[Math.floor(Math.random() * anims.length)],
				color = colors[Math.floor(Math.random() * colors.length)],
				[ang, dist] = C.getAngDist(from, to),
				confSize = size + C.getJitter(sizeJitter);
		ang += C.getJitter(angJitter);
		dist += C.getJitter(distJitter);
		let elem = document.createElement('div');
		elem.classList.add(`confetti`, `confetti--animation-${anim}`);
		Object.assign(elem.style, {width: `${dist}px`, height: `${size}px`, left: `${x}px`, top: `${y}px`, transform: `rotate(${ang}deg)`});
		elem.style.setProperty('--confetti-color', color);
		setTimeout(() => elem.remove(), timeout);
		parent.appendChild(elem);
		return elem;
	};	
	P.blastConfetti = function(from, to, duration = 500) {
		console.log('EffectConfetti.blastConfetti(from, to, duration);', from, to, duration);
		const {interval} = this.config;
		let intervalId = setInterval(this.fireConfetti.bind(this, from, to), interval);
		setTimeout(() => clearInterval(intervalId), duration);
	};
	P.startConfettiGun = function(from, to) {
		console.log('EffectConfetti.startConfettiGun(from, to);', from, to);
		const {interval} = this.config;
		clearInterval(this.confettiGunId);
		this.confettiGunId = setInterval(this.fireConfetti.bind(this, from, to), interval);
	};
	P.stopConfettiGun = function() {
		clearInterval(this.confettiGunId);
		delete this.confettiGunId;
	};
	return C;
})();

(async () => {
	
	const parent = document.querySelector('.confetti-container');
	let fxConfetti = new EffectConfetti({
		parent,
		size: 10,
		posJitter: 20, angJitter: 15, distJitter: 50, sizeJitter: 10
	});
	
	const mp = [parent.clientWidth * 0.5, parent.clientHeight * 0.5];
	function handleMousemove(event) {
		mp[0] = event.clientX;
		mp[1] = event.clientY;
	}
	function handleMousedown(event) {
		let from = [event.clientX, event.clientY];
		fxConfetti.startConfettiGun(from, mp);
	}
	function handleMouseup(event) {
		fxConfetti.stopConfettiGun()
	}
	function handleRandomConfettiBlast() {
		let w = parent.clientWidth, h = parent.clientHeight,
				from = [Math.round((0.15 + 0.7 * Math.random()) * w), Math.round((0.15 + 0.7 * Math.random()) * h)],
				to =   [Math.round((0.25 + 0.5 * Math.random()) * w), Math.round((0.25 + 0.5 * Math.random()) * h)];
		fxConfetti.blastConfetti(from, to, 500);
	}
	
	document.body.addEventListener('mousemove', handleMousemove);
	document.body.addEventListener('mousedown', handleMousedown);
	document.body.addEventListener('mouseup', handleMouseup);
	setInterval(handleRandomConfettiBlast, 1000);
	handleRandomConfettiBlast();
	
	setInterval(() => console.log('Confetti count:', parent.children.length), 1000);
})();
</script>
 
</html>
