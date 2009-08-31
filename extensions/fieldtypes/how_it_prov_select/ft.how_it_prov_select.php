<?php

if ( ! defined('EXT')) exit('Invalid file request');


/**
 * States Select Class
 * @package   It Prov Select
 * @author    Luca Di Bella
 * @copyright 2009 Luca Di Bella
 * @license   http://creativecommons.org/licenses/by-sa/3.0/ Attribution-Share Alike 3.0 Unported
 */

class How_it_prov_select extends Fieldframe_Fieldtype {

	var $info = array(
			'name'             => 'HOW IT Prov Select',
			'version'          => '0.1',
			'desc'             => 'Creates a select menu with the Italian Province.',
			'docs_url'         => 'http://github.com'
			);


		/**
		 * Display Field
		 *
		 * @param  string  $field_name      The field's name
		 * @param  mixed   $field_data      The field's current value
		 * @param  array   $field_settings  The field's settings
		 * @return string  The field's HTML
		 */
		function display_field($field_name, $field_data, $field_settings)
		{
		 	global $DSP;
			$provs = array(
				"AG" => "Agrigento",
				"AL" => "Alessandria",
				"AN" => "Ancona",
				"AO" => "Aosta",
				"AR" => "Arezzo",
				"AP" => "Ascoli Piceno",
				"AT" => "Asti",
				"AV" => "Avellino",
				"BA" => "Bari",
				"BT" => "Barletta-Andria-Trani",
				"BL" => "Belluno",
				"BN" => "Benevento",
				"BG" => "Bergamo",
				"BI" > "Biella",
				"BO" => "Bologna",
				"BZ" => "Bolzano",
				"BS" => "Brescia",
				"BR" => "Brindisi",
				"CA" => "Cagliari",
				"CL" => "Caltanissetta",
				"CB" => "Campobasso",
				"CI" => "Carbonia-Iglesias",
				"CE" => "Caserta",
				"CT" => "Catania",
				"CZ" => "Catanzaro",
				"CH" => "Chieti",
				"CO" => "Como",
				"CS" => "Cosenza",
				"CR" => "Cremona",
				"KR" => "Crotone",
				"CN" => "Cuneo",
				"EN" => "Enna",
				"FM" => "Fermo",
				"FE" => "Ferrara",
				"FI" => "Firenze",
				"FG" => "Foggia",
				"FC" => "Forlì-Cesena",
				"FR" => "Frosinone",
				"GE" => "Genova",
				"GO" => "Gorizia",
				"GR" => "Grosseto",
				"IM" => "Imperia",
				"IS" => "Isernia",
				"SP" => "La Spezia",
				"AQ" => "L'Aquila",
				"LT" => "Latina",
				"LE" => "Lecce",
				"LC" => "Lecco",
				"LI" => "Livorno",
				"LO" => "Lodi",
				"LU" => "Lucca",
				"MC" => "Macerata",
				"MN" => "Mantova",
				"MS" => "Massa-Carrara",
				"MT" => "Matera",
				"ME" => "Messina",
				"MI" => "Milano",
				"MO" => "Modena",
				"MB" => "Monza e della Brianza",
				"NA" => "Napoli",
				"NO" => "Novara",
				"NU" => "Nuoro",
				"OT" => "Olbia-Tempio",
				"OR" => "Oristano",
				"PD" => "Padova",
				"PA" => "Palermo",
				"PR" => "Parma",
				"PV" => "Pavia",
				"PG" => "Perugia",
				"PU" => "Pesaro e Urbino",
				"PE" => "Pescara",
				"PC" => "Piacenza",
				"PI" => "Pisa",
				"PT" => "Pistoia",
				"PN" => "Pordenone",
				"PZ" => "Potenza",
				"PO" => "Prato",
				"RG" => "Ragusa",
				"RA" => "Ravenna",
				"RC" => "Reggio Calabria",
				"RE" => "Reggio Emilia",
				"RI" => "Rieti",
				"RN" => "Rimini",
				"RM" => "Roma",
				"RO" => "Rovigo",
				"SA" => "Salerno",
				"VS" => "Medio Campidano",
				"SS" => "Sassari",
				"SV" => "Savona",
				"SI" => "Siena",
				"SR" => "Siracusa",
				"SO" => "Sondrio",
				"TA" => "Taranto",
				"TE" => "Teramo",
				"TR" => "Terni",
				"TO" => "Torino",
				"OG" => "Ogliastra",
				"TP" => "Trapani",
				"TN" => "Trento",
				"TV" => "Treviso",
				"TS" => "Trieste",
				"UD" => "Udine",
				"VA" => "Varese",
				"VE" => "Venezia",
				"VB" => "Verbano-Cusio-Ossola",
				"VC" => "Vercelli",
				"VR" => "Verona",
				"VV" => "Vibo Valentia",
				"VI" => "Vicenza",
				"VT" => "Viterbo"
			);

			$r = $DSP->input_select_header($field_name);
			$r .= $DSP->input_select_option('', '--');
			foreach ($provs as $key => $value):
				$r .= $DSP->input_select_option($key, $value, $field_data == $key);
			endforeach;
			$r .= $DSP->input_select_footer();
			return $r;
		}

		/**
		 * Display Cell
		 *
		 * @param  string  $cell_name      The cell's name
		 * @param  mixed   $cell_data      The cell's current value
		 * @param  array   $cell_settings  The cell's settings
		 * @return string  The cell's HTML
		 * @author Brandon Kelly <me@brandon-kelly.com>
		 */
		function display_cell($cell_name, $cell_data, $cell_settings)
		{
			return $this->display_field($cell_name, $cell_data, $cell_settings);
		}

}


?>