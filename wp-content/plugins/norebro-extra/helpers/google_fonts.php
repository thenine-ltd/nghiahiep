<?php

	class NorebroExtraGoogleFonts {
		static public function get_google_fonts_array() {
			include '../acf_ext/gf_list.php';

			return $norebro_gf_object;
		}
	}
