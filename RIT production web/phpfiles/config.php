<?php
	define("MAIN_TITLE", "Collaboratory for Resiliency and Recovery");
	define("IMAGES", "http://" . $_SERVER['HTTP_HOST'] . "/ritprod/Images/");
	
	//Menu options
	$menu_options = array(
		'home' => "HOME",
		'about' => "ABOUT",
		'cap' => "CAPABILITIES",
		'grants' => "GRANTS & RESEARCH",
		'contact' => "CONTACT US"
	);
	
	//All the contacts
	$contacts = array(
		new contact("Dr. Jennifer Schneider","Director,<br/>Collaboratory for Resiliency and Recovery", "5854752092", "", "jlwcem@rit.edu","Layer-22.gif"),
		new contact("Elaine Lewis", "Sr. Program Administrator", "5854754576", "GOL-1377", "Elaine.Lewis@rit.edu", "3044_Lewis_HR_01.gif")
	);
	
	//outputs the menu and their links
	function menu(){
		global $menu_options;	
		foreach($menu_options as $item){
					
					if($item === "CONTACT US"){
						if($_SERVER['current']==='Contact')
							print "<a href='contact-us.php' class='menu'><span><li class='active item'>$item</li></span></a>";
						else
							print "<a href='contact-us.php' class='menu'><span><li class='item'>$item</li></span></a>";
						continue;
					}
					elseif ($item === "HOME") {
						if($_SERVER['current']==='Home')
							print "<a href='home.php' class='menu'><span><li class='active item'>$item</li></span></a>";
						else
							print "<a href='home.php' class='menu'><span><li class='item'>$item</li></span></a>";
						continue;
			
					}
					elseif ($item === "CAPABILITIES") {
						print "<li class='menu'><span ><a href = '#'class='item'>$item</a></span>
								<div class ='dropdown'>
									<span class='dropitem'><a href='#'>Emergency Management</a></span>
									<span class='dropitem'><a href='#'>Decision Making and Situational Awareness</a></span>
									<span class='dropitem'><a href='#'>Cyber Security and Critical Infrastructure Analyses</a></span>
								</div></li>";
						continue;
					}
					elseif($item === "ABOUT")
					{
						print "<li class='menu'><span ><a href = '#'class='item'>$item</a></span>
								<div class ='dropdown'>
									<span class='dropitem'><a href='#'>Mission and Vision</a></span>
									<span class='dropitem'><a href='#'>Principal Investigators</a></span>
									<span class='dropitem'><a href='#'>Collaborators</a></span>
									<span class='dropitem'><a href='#'>Publications, Presentations and Panels</a></span>
								</div></li>";
						continue;
					}
					print "<a href='' class='menu'><span><li class='item'>$item</li></span></a>";
				}
	}
	
	//Holds the contact info 
	class contact{
		public $email;
		public $name;
		public $title;
		public $office;
		public $image;
		//Making this private only to force use of getter for formatting reasons
		private $phone;
		
		public function __construct($name, $title, $phone, $office, $email, $image){
			$this->name = $name;
			$this->title = $title;
			$this->phone = $phone;
			$this->email = $email;
			$this->office = $office;
			$this->image = IMAGES . $image;
		}
		
		//Returns a formatted phone
		public function get_phone(){
			return "(" . substr($this->phone, 0, 3) . ") " . substr($this->phone, 3, 3) . " - " . substr($this->phone, 6, 4);
		}
	}
?>
