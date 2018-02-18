<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quran DB</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div id="jump">
		<a onclick="previous()" class="btn previous">&laquo; previous</a>

		<select id="surah" name="surah" onchange="load_verses()">
			<option value="1" data-verses="7">Fatihah &bull; 1</option>
			<option value="2" data-verses="286">Baqarah &bull; 2</option>
			<option value="3" data-verses="200">Imra &bull; 3</option>
			<option value="4" data-verses="176">Nisa &bull; 4</option>
			<option value="5" data-verses="120">Maida &bull; 5</option>
			<option value="6" data-verses="165">An’am &bull; 6</option>
			<option value="7" data-verses="206">Araf &bull; 7</option>
			<option value="8" data-verses="75">Anfal &bull; 8</option>
			<option value="9" data-verses="129">Tawbah &bull; 9</option>
			<option value="10" data-verses="109">Yunus &bull; 10</option>
			<option value="11" data-verses="123">Hud &bull; 11</option>
			<option value="12" data-verses="111">Yusuf &bull; 12</option>
			<option value="13" data-verses="43">Ra’d &bull; 13</option>
			<option value="14" data-verses="52">Ibrahim &bull; 14</option>
			<option value="15" data-verses="99">Hijr &bull; 15</option>
			<option value="16" data-verses="128">Nahl &bull; 16</option>
			<option value="17" data-verses="111">Isra &bull; 17</option>
			<option value="18" data-verses="110">Kahf &bull; 18</option>
			<option value="19" data-verses="98">Maryam &bull; 19</option>
			<option value="20" data-verses="135">Ta-Ha &bull; 20</option>
			<option value="21" data-verses="112">Anbiya &bull; 21</option>
			<option value="22" data-verses="78">Hajj &bull; 22</option>
			<option value="23" data-verses="118">Muminu &bull; 23</option>
			<option value="24" data-verses="64">Nur &bull; 24</option>
			<option value="25" data-verses="77">Furqa &bull; 25</option>
			<option value="26" data-verses="227">Shu’ara &bull; 26</option>
			<option value="27" data-verses="93">Naml &bull; 27</option>
			<option value="28" data-verses="88">Qasas &bull; 28</option>
			<option value="29" data-verses="69">Ankabut &bull; 29</option>
			<option value="30" data-verses="60">Rum &bull; 30</option>
			<option value="31" data-verses="34">Luqma &bull; 31</option>
			<option value="32" data-verses="30">Sajda &bull; 32</option>
			<option value="33" data-verses="73">Ahzab &bull; 33</option>
			<option value="34" data-verses="54">Saba &bull; 34</option>
			<option value="35" data-verses="45">Fatir &bull; 35</option>
			<option value="36" data-verses="83">Ya-Si &bull; 36</option>
			<option value="37" data-verses="182">Saffar &bull; 37</option>
			<option value="38" data-verses="88">Sad &bull; 38</option>
			<option value="39" data-verses="75">Zumar &bull; 39</option>
			<option value="40" data-verses="85">Mumi &bull; 40</option>
			<option value="41" data-verses="54">Ha-Mim &bull; 41</option>
			<option value="42" data-verses="53">Shura &bull; 42</option>
			<option value="43" data-verses="89">Zukhruf &bull; 43</option>
			<option value="44" data-verses="59">Dukha &bull; 44</option>
			<option value="45" data-verses="37">Jathiya &bull; 45</option>
			<option value="46" data-verses="35">Ahqaf &bull; 46</option>
			<option value="47" data-verses="38">Muhammad &bull; 47</option>
			<option value="48" data-verses="29">Fat’h &bull; 48</option>
			<option value="49" data-verses="18">Hujurat &bull; 49</option>
			<option value="50" data-verses="45">Qaf &bull; 50</option>
			<option value="51" data-verses="60">Zariyat &bull; 51</option>
			<option value="52" data-verses="49">Tur &bull; 52</option>
			<option value="53" data-verses="62">Najm &bull; 53</option>
			<option value="54" data-verses="55">Qamar &bull; 54</option>
			<option value="55" data-verses="78">Rahma &bull; 55</option>
			<option value="56" data-verses="96">Waqia &bull; 56</option>
			<option value="57" data-verses="29">Hadid &bull; 57</option>
			<option value="58" data-verses="22">Mujadila &bull; 58</option>
			<option value="59" data-verses="24">Hashr &bull; 59</option>
			<option value="60" data-verses="13">Mumtahana &bull; 60</option>
			<option value="61" data-verses="14">Saff &bull; 61</option>
			<option value="62" data-verses="11">Jum`a &bull; 62</option>
			<option value="63" data-verses="11">Munafiqun &bull; 63</option>
			<option value="64" data-verses="18">Tagabun &bull; 64</option>
			<option value="65" data-verses="12">Talaq &bull; 65</option>
			<option value="66" data-verses="12">Tahrim &bull; 66</option>
			<option value="67" data-verses="30">Mulk &bull; 67</option>
			<option value="68" data-verses="52">Qalam &bull; 68</option>
			<option value="69" data-verses="52">Haqqa &bull; 69</option>
			<option value="70" data-verses="44">Maarij &bull; 70</option>
			<option value="71" data-verses="28">Nuh &bull; 71</option>
			<option value="72" data-verses="28">Jinn &bull; 72</option>
			<option value="73" data-verses="20">Muzzamil &bull; 73</option>
			<option value="74" data-verses="56">Muddath &bull; 74</option>
			<option value="75" data-verses="40">Qiyamat &bull; 75</option>
			<option value="76" data-verses="31">Dahr &bull; 76</option>
			<option value="77" data-verses="50">Mursalat &bull; 77</option>
			<option value="78" data-verses="40">Nabaa &bull; 78</option>
			<option value="79" data-verses="46">Nazrat &bull; 79</option>
			<option value="80" data-verses="42">Abasa &bull; 80</option>
			<option value="81" data-verses="29">Takwir &bull; 81</option>
			<option value="82" data-verses="19">Infitar &bull; 82</option>
			<option value="83" data-verses="36">Mutaffifin &bull; 83</option>
			<option value="84" data-verses="25">Inshiqaq &bull; 84</option>
			<option value="85" data-verses="22">Buruj &bull; 85</option>
			<option value="86" data-verses="17">Tariq &bull; 86</option>
			<option value="87" data-verses="19">A’la &bull; 87</option>
			<option value="88" data-verses="26">Gashiyya &bull; 88</option>
			<option value="89" data-verses="30">Fajr &bull; 89</option>
			<option value="90" data-verses="20">Balad &bull; 90</option>
			<option value="91" data-verses="15">Shams &bull; 91</option>
			<option value="92" data-verses="21">Layl &bull; 92</option>
			<option value="93" data-verses="11">Dhuha &bull; 93</option>
			<option value="94" data-verses="8">Sharh &bull; 94</option>
			<option value="95" data-verses="8">Tin &bull; 95</option>
			<option value="96" data-verses="19">Alaq &bull; 96</option>
			<option value="97" data-verses="5">Qadr &bull; 97</option>
			<option value="98" data-verses="8">Baiyina &bull; 98</option>
			<option value="99" data-verses="8">Zalzalah &bull; 99</option>
			<option value="100" data-verses="11">Adiyat &bull; 100</option>
			<option value="101" data-verses="11">Qaria &bull; 101</option>
			<option value="102" data-verses="8">Takathur &bull; 102</option>
			<option value="103" data-verses="3">Asr &bull; 103</option>
			<option value="104" data-verses="9">Humaza &bull; 104</option>
			<option value="105" data-verses="5">Fil &bull; 105</option>
			<option value="106" data-verses="4">Quraysh &bull; 106</option>
			<option value="107" data-verses="7">Ma’un &bull; 107</option>
			<option value="108" data-verses="3">Kauthar &bull; 108</option>
			<option value="109" data-verses="6">Kafirun &bull; 109</option>
			<option value="110" data-verses="3">Nasr &bull; 110</option>
			<option value="111" data-verses="5">Lahab &bull; 111</option>
			<option value="112" data-verses="4">Ikhlas &bull; 112</option>
			<option value="113" data-verses="5">Falaq &bull; 113</option>
			<option value="114" data-verses="6">Nas &bull; 114</option>
		</select>
		<select class="" id="verses" name="verse" onchange="load_verse()"></select>
		<a onclick="next()" class="btn next">next &raquo;</a>
	</div>

	<div id="quran">
		<div id="arabic">arabic</div>
		<div id="english">english</div>
		<div id="translit">translit</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="script.js" charset="utf-8"></script>
	<script type="text/javascript">
		var id = <?=$id?>;
	</script>

</body>
</html>
