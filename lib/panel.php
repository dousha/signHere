<?php
## panel.php
#
# A simple bootstrap panel.
#
# Objects:
# PanelManager{ - encapsulate Panels
#	Functions:
#		Panel create_panel(); - create a panel
#		void fill_panel(Panel $p, 
#						string $title, 
#						string $content, 
#						string $footer = '', 
#						int $level = 1); - fill the given panel
#		void destory_panel(int $id); - delete created panel by id
#		void render(); - yields all the panels
# }
#
# Panel{
#	Functions:
#		void set_level(int $level = 1); - $level can be ...
#			0 - default (grey),
#			1 - primary (blue),
#			2 - warning (yellow),
#			3 - error (red)
#		void set_title(string $title);
#		void set_title_f(function $f); - $f is expected to be a valid function
#		returning a string
#		void set_content(string $content);
#		void set_content_f(function $f); - $f is expected to be a valid function
#		returning a string
#		void set_footer(string $footer);
#		void set_footer_f(function $f); - $f is expected to be a valid function
#		returning a string
#		string render(); - yields a complete panel
# }
#
# created by dousha

class PanelManager{
	function __construct(){
		$this->panels = array();
	}
	
	public function create_panel(){
		$tid = count($this->panels);
		$p = new Panel($tid);
		array_push($this->panels, $p);
		return $p;
	}

	public function fill_panel(Panel $p,
								string $title = ' ', 
								string $content = '', 
								string $footer = '',
								int $level = 1){
		$p->set_title($title);
		$p->set_content($content);
		$p->set_footer($footer);
		$p->set_level($level);
	}

	public function fill_panel_f(Panel $p, $f1, $f2, $f3 = NULL, int $level = 1){
		$p->set_title_f($f1);
		$p->set_content_f($f2);
		$p->set_footer_f($f3);
		$p->set_level($level);
	}

	public function destory_panel(int $id){
		unset($this->panels[$id]);
		$this->panels[$id] = NULL;
	}

	public function render(){
		foreach($this->panels as $p){
			$p->render();
		}
	}

	private $panels;
}

class Panel{
	function __construct(int $id){
		$this->id = $id;
		$this->level = 1;
		$this->title = ' ';
		$this->content = ' ';
		$this->footer = '';
	}

	public function set_level(int $level = 1){
		$this->level = $level;
	}

	public function set_title(string $title){
		$this->title = $title;
	}

	public function set_title_f($f){
		$this->title = $f();
	}

	public function set_content(string $content){
		$this->content = $content;
	}

	public function set_content_f($f){
		$this->content = $f();
	}

	public function set_footer(string $footer){
		$this->footer = $footer;
	}

	public function set_footer_f($f){
		$this->footer = $f();
	}

	public function render(){
?>
	<div id="pnl-<?php echo $this->id; ?>" class="panel panel-<?php
		switch($this->level){
			case 1:
				echo 'primary';
				break;
			case 0:
				echo 'default';
				break;
			case 2:
				echo 'warning';
				break;
			case 3:
				echo 'danger';
				break;
			default:
				echo 'primary';
				break;
		}
		?>">
		<div id="pnl-heading-<?php echo $this->id; ?>" class="panel-heading">
			<?php echo $this->title;?>
		</div>
		<div id="pnl-heading-<?php echo $this->id; ?>" class="panel-body">
			<?php echo $this->content;?>
		</div>
		<?php
			if($this->footer != ''){
		?>
		<div id="pnl-heading-<?php echo $this->id; ?>" class="panel-footer">
			<?php echo $this->footer;?>
		</div>
		<?php } ?>
	</div>
<?php
	}
	
	private $id;
	private $level = 1;
	private $title = ' ';
	private $content = '';
	private $footer = '';
}

