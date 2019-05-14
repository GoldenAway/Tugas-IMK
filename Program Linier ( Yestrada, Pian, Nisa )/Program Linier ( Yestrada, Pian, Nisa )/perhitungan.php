<?php 
	class PersLinear {
		private $x1, $x2, $x3, $y1, $y2, $y3, $z1, $z3;
		
		public function __construct($x1, $x2, $x3, $y1, $y2, $y3, $z1, $z2){
			$this->x1 = $x1;
			$this->x2 = $x2;
			$this->x3 = $x3;
			$this->y1 = $y1;
			$this->y2 = $y2;
			$this->y3 = $y3;
			$this->z1 = $z1;
			$this->z2 = $z2;
		}

		public function hitungx11(){
			$x11=$this->z1/$this->x1;
			return $x11;
		}
		public function hitungy11(){
			$y11=$this->z1/$this->y1;
			return $y11;
		}
		public function hitungx22(){
			$x22=$this->z2/$this->x2;
			return $x22;
		}
		public function hitungy22(){
			$y22=$this->z2/$this->y2;
			return $y22;
		}
		public function hitungx33(){
			$x33=(($this->z1 * $this->y2)-($this->z2 * $this->y1))/(($this->x1 * $this->y2)-($this->x2 * $this->y1));
			return $x33;
		}
		public function hitungy33(){
			$y33=(($this->z1 * $this->x2)-($this->z2 * $this->x1))/(($this->y1 * $this->x2)-($this->y2 * $this->x1));
			return $y33;
		}
		public function hitungMaxMin($a, $b){
			$mm = ($this->x3 * $a) + ($this->y3 * $b);
			return $mm;
		}
	}
?>