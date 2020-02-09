<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model {

	function nb($data)
	{
		function cp($x,$y)
		{
			$nc = [];
			$jumlah_gejala = count($GLOBALS['gejala']);
			$peluang_penyakit = 1/count($GLOBALS['penyakit_gejala']);
			$hasil = 1;

			//echo "<pre>";
			foreach ($x as $key => $value) {
				if(in_array($value, $GLOBALS['penyakit_gejala'][$y]))
					array_push($nc, 1);
				else
					array_push($nc, 0);
			}
			//print_r($nc);
			//echo $jumlah_gejala."\n";
			
			
			//var_dump($x);
			//echo "\n";
			//var_dump($GLOBALS['penyakit_gejala']);
			//echo $GLOBALS['count_input'][$x]."\n";
			//echo $GLOBALS['count_gejala'][$x];
			for ($i=0; $i < count($nc); $i++) { 
				$hasil *= ($nc[$i]+$jumlah_gejala * $peluang_penyakit)/(1+$jumlah_gejala);
			}
			$hasil *= $peluang_penyakit;
			//echo $y." ".$hasil;
			//echo "</pre>";
			return$hasil;
			//echo (0+18*0.0909090909091)/(1+18);
		}
		$GLOBALS['gejala'] = [];
		$GLOBALS['penyakit_gejala'] = [];
		$GLOBALS['input'] = [];
		$nb = [];

		for ($i=1; $i <= 18 ; $i++) { 
			if(!empty($data['G'.$i]))
				array_push($GLOBALS['input'], $data['G'.$i]);
		}

		$GLOBALS['gejala']["G1"] = "Mual";
		$GLOBALS['gejala']["G2"] = "Kembung";
		$GLOBALS['gejala']["G3"] = "Hilang (berkurang) nafsu makan";
		$GLOBALS['gejala']["G4"] = "Muntah";
		$GLOBALS['gejala']["G5"] = "Diare";
		$GLOBALS['gejala']["G6"] = "Tinja bercampur darah";
		$GLOBALS['gejala']["G7"] = "Nyeri perut";
		$GLOBALS['gejala']["G8"] = "Demam";
		$GLOBALS['gejala']["G9"] = "Dada terasa terbakar";
		$GLOBALS['gejala']["G10"] = "Kram perut";
		$GLOBALS['gejala']["G11"] = "Sesekali muntah darah";
		$GLOBALS['gejala']["G12"] = "Sering muntah darah";
		$GLOBALS['gejala']["G13"] = "Perih dari leher sampai perut";
		$GLOBALS['gejala']["G14"] = "Nyeri di leher, pusar dan punggung";
		$GLOBALS['gejala']["G15"] = "Nyeri ulu hati";
		$GLOBALS['gejala']["G16"] = "Berat badan turun drastis";
		$GLOBALS['gejala']["G17"] = "Lidah berwarna putih";
		$GLOBALS['gejala']["G18"] = "Sakit saat buang air";

		$GLOBALS['penyakit_gejala']["Crohn"] = array("G1","G3","G6","G7");
		$GLOBALS['penyakit_gejala']["Gastritis Akut"] = array("G1","G2","G3","G4");
		$GLOBALS['penyakit_gejala']["Gastritis Kronis"] = array("G1","G3","G6","G12");
		$GLOBALS['penyakit_gejala']["Maag"] = array("G1","G3","G7","G13");
		$GLOBALS['penyakit_gejala']["Tukak Lambung"] = array("G1","G3","G7","G14");
		$GLOBALS['penyakit_gejala']["Gastriporesis"] = array("G1","G3","G4","G15");
		$GLOBALS['penyakit_gejala']["Gastroenteristis"] = array("G1","G3","G4","G16");
		$GLOBALS['penyakit_gejala']["Usus Buntu"] = array("G1","G3","G4","G8","G18");
		$GLOBALS['penyakit_gejala']["Tifus"] = array("G1","G4","G8","G17");
		$GLOBALS['penyakit_gejala']["Gerd"] = array("G1","G4","G9");
		$GLOBALS['penyakit_gejala']["Iritasi Usu Besar"] = array("G1","G5","G10");

		$GLOBALS['total_gejala'] = array(	
			"G1","G3","G6","G7",
			"G1","G2","G3","G4",
			"G1","G3","G6","G12",
			"G1","G3","G7","G13",
			"G1","G3","G7","G14",
			"G1","G3","G4","G15",
			"G1","G3","G4","G16",
			"G1","G3","G4","G8","G18",
			"G1","G4","G8","G17",
			"G1","G4","G9",
			"G1","G5","G10"
		);
		$GLOBALS['count_gejala'] = array_count_values($GLOBALS['total_gejala']);
		$GLOBALS['count_input'] = array_count_values($GLOBALS['input']);

		//echo "<pre>";
		foreach ($GLOBALS['penyakit_gejala'] as $key => $value) {
			if(empty($GLOBALS['input']))
				$nb[$key] = 0;
			else	
				$nb[$key] = cp($GLOBALS['input'],$key);
		}
		return $nb;
		/*print_r($nb);
		if(max($nb) == 0)
				echo "penyakit tidak diketahui";
		else
			foreach ($nb as $key => $value) {
				if($value == max($nb))
					echo "Kemungkinan penyakit ".$key.": ".$value."\n";
			}
		echo "</pre>";
		*/
	}

	

}

/* End of file M_Main.php */
/* Location: ./application/models/M_Main.php */