﻿$(document).ready(function(){

	var pst = $("#pst");
	
	
	
	$("form#forma").submit(function() {
		var a = new Array();
		var i=0;
		for(i = 0; i <= 846; i++){
			a[i] = document.getElementById(i).value;
		}
	    //  a[0]     = $('input[id=0]').val();
        //var k1     = $('input[name=1]').val();
		var b = 0;
            $.ajax({
                type: "POST",
                url: "2.php",
				data:

  "0="+ a[0] +
"& 1="+ a[1] +
"& 2="+ a[2] +
"& 3="+ a[3] +
"& 4="+ a[4] +
"& 5="+ a[5] +
"& 6="+ a[6] +
"& 7="+ a[7] +
"& 8="+ a[8] +
"& 9="+ a[9] +
"& 10="+ a[10] +
"& 11="+ a[11] +
"& 12="+ a[12] +
"& 13="+ a[13] +
"& 14="+ a[14] +
"& 15="+ a[15] +
"& 16="+ a[16] +
"& 17="+ a[17] +
"& 18="+ a[18] +
"& 19="+ a[19] +
"& 20="+ a[20] +
"& 21="+ a[21] +
"& 22="+ a[22] +
"& 23="+ a[23] +
"& 24="+ a[24] +
"& 25="+ a[25] +
"& 26="+ a[26] +
"& 27="+ a[27] +
"& 28="+ a[28] +
"& 29="+ a[29] +
"& 30="+ a[30] +
"& 31="+ a[31] +
"& 32="+ a[32] +
"& 33="+ a[33] +
"& 34="+ a[34] +
"& 35="+ a[35] +
"& 36="+ a[36] +
"& 37="+ a[37] +
"& 38="+ a[38] +
"& 39="+ a[39] +
"& 40="+ a[40] +
"& 41="+ a[41] +
"& 42="+ a[42] +
"& 43="+ a[43] +
"& 44="+ a[44] +
"& 45="+ a[45] +
"& 46="+ a[46] +
"& 47="+ a[47] +
"& 48="+ a[48] +
"& 49="+ a[49] +
"& 50="+ a[50] +
"& 51="+ a[51] +
"& 52="+ a[52] +
"& 53="+ a[53] +
"& 54="+ a[54] +
"& 55="+ a[55] +
"& 56="+ a[56] +
"& 57="+ a[57] +
"& 58="+ a[58] +
"& 59="+ a[59] +
"& 60="+ a[60] +
"& 61="+ a[61] +
"& 62="+ a[62] +
"& 63="+ a[63] +
"& 64="+ a[64] +
"& 65="+ a[65] +
"& 66="+ a[66] +
"& 67="+ a[67] +
"& 68="+ a[68] +
"& 69="+ a[69] +
"& 70="+ a[70] +
"& 71="+ a[71] +
"& 72="+ a[72] +
"& 73="+ a[73] +
"& 74="+ a[74] +
"& 75="+ a[75] +
"& 76="+ a[76] +
"& 77="+ a[77] +
"& 78="+ a[78] +
"& 79="+ a[79] +
"& 80="+ a[80] +
"& 81="+ a[81] +
"& 82="+ a[82] +
"& 83="+ a[83] +
"& 84="+ a[84] +
"& 85="+ a[85] +
"& 86="+ a[86] +
"& 87="+ a[87] +
"& 88="+ a[88] +
"& 89="+ a[89] +
"& 90="+ a[90] +
"& 91="+ a[91] +
"& 92="+ a[92] +
"& 93="+ a[93] +
"& 94="+ a[94] +
"& 95="+ a[95] +
"& 96="+ a[96] +
"& 97="+ a[97] +
"& 98="+ a[98] +
"& 99="+ a[99] +
"& 100="+ a[100] +
"& 101="+ a[101] +
"& 102="+ a[102] +
"& 103="+ a[103] +
"& 104="+ a[104] +
"& 105="+ a[105] +
"& 106="+ a[106] +
"& 107="+ a[107] +
"& 108="+ a[108] +
"& 109="+ a[109] +
"& 110="+ a[110] +
"& 111="+ a[111] +
"& 112="+ a[112] +
"& 113="+ a[113] +
"& 114="+ a[114] +
"& 115="+ a[115] +
"& 116="+ a[116] +
"& 117="+ a[117] +
"& 118="+ a[118] +
"& 119="+ a[119] +
"& 120="+ a[120] +
"& 121="+ a[121] +
"& 122="+ a[122] +
"& 123="+ a[123] +
"& 124="+ a[124] +
"& 125="+ a[125] +
"& 126="+ a[126] +
"& 127="+ a[127] +
"& 128="+ a[128] +		
"& 129="+ a[129] +
"& 130="+ a[130] +
"& 131="+ a[131] +
"& 132="+ a[132] +
"& 133="+ a[133] +
"& 134="+ a[134] +
"& 135="+ a[135] +
"& 136="+ a[136] +
"& 137="+ a[137] +
"& 138="+ a[138] +
"& 139="+ a[139] +
"& 140="+ a[140] +
"& 141="+ a[141] +
"& 142="+ a[142] +
"& 143="+ a[143] +
"& 144="+ a[144] +
"& 145="+ a[145] +
"& 146="+ a[146] +
"& 147="+ a[147] +
"& 148="+ a[148] +
"& 149="+ a[149] +
"& 150="+ a[150] +
"& 151="+ a[151] +
"& 152="+ a[152] +
"& 153="+ a[153] +
"& 154="+ a[154] +
"& 155="+ a[155] +
"& 156="+ a[156] +
"& 157="+ a[157] +
"& 158="+ a[158] +
"& 159="+ a[159] +
"& 160="+ a[160] +
"& 161="+ a[161] +
"& 162="+ a[162] +
"& 163="+ a[163] +
"& 164="+ a[164] +
"& 165="+ a[165] +
"& 166="+ a[166] +
"& 167="+ a[167] +
"& 168="+ a[168] +
"& 169="+ a[169] +
"& 170="+ a[170] +
"& 171="+ a[171] +
"& 172="+ a[172] +
"& 173="+ a[173] +
"& 174="+ a[174] +
"& 175="+ a[175] +
"& 176="+ a[176] +
"& 177="+ a[177] +
"& 178="+ a[178] +
"& 179="+ a[179] +
"& 180="+ a[180] +
"& 181="+ a[181] +
"& 182="+ a[182] +
"& 183="+ a[183] +
"& 184="+ a[184] +
"& 185="+ a[185] +
"& 186="+ a[186] +
"& 187="+ a[187] +
"& 188="+ a[188] +
"& 189="+ a[189] +
"& 190="+ a[190] +
"& 191="+ a[191] +
"& 192="+ a[192] +
"& 193="+ a[193] +
"& 194="+ a[194] +
"& 195="+ a[195] +
"& 196="+ a[196] +
"& 197="+ a[197] +
"& 198="+ a[198] +
"& 199="+ a[199] +
"& 200="+ a[200] +
"& 201="+ a[201] +
"& 202="+ a[202] +
"& 203="+ a[203] +
"& 204="+ a[204] +
"& 205="+ a[205] +
"& 206="+ a[206] +
"& 207="+ a[207] +
"& 208="+ a[208] +
"& 209="+ a[209] +
"& 210="+ a[210] +
"& 211="+ a[211] +
"& 212="+ a[212] +
"& 213="+ a[213] +
"& 214="+ a[214] +
"& 215="+ a[215] +
"& 216="+ a[216] +
"& 217="+ a[217] +
"& 218="+ a[218] +
"& 219="+ a[219] +
"& 220="+ a[220] +
"& 221="+ a[221] +
"& 222="+ a[222] +
"& 223="+ a[223] +
"& 224="+ a[224] +
"& 225="+ a[225] +
"& 226="+ a[226] +
"& 227="+ a[227] +
"& 228="+ a[228] +
"& 229="+ a[229] +
"& 230="+ a[230] +
"& 231="+ a[231] +
"& 232="+ a[232] +
"& 233="+ a[233] +
"& 234="+ a[234] +
"& 235="+ a[235] +
"& 236="+ a[236] +
"& 237="+ a[237] +
"& 238="+ a[238] +
"& 239="+ a[239] +
"& 240="+ a[240] +
"& 241="+ a[241] +
"& 242="+ a[242] +
"& 243="+ a[243] +
"& 244="+ a[244] +
"& 245="+ a[245] +
"& 246="+ a[246] +
"& 247="+ a[247] +
"& 248="+ a[248] +
"& 249="+ a[249] +
"& 250="+ a[250] +
"& 251="+ a[251] +
"& 252="+ a[252] +
"& 253="+ a[253] +
"& 254="+ a[254] +
"& 255="+ a[255] +
"& 256="+ a[256] +
"& 257="+ a[257] +
"& 258="+ a[258] +
"& 259="+ a[259] +
"& 260="+ a[260] +
"& 261="+ a[261] +
"& 262="+ a[262] +
"& 263="+ a[263] +
"& 264="+ a[264] +
"& 265="+ a[265] +
"& 266="+ a[266] +
"& 267="+ a[267] +
"& 268="+ a[268] +
"& 269="+ a[269] +
"& 270="+ a[270] +
"& 271="+ a[271] +
"& 272="+ a[272] +
"& 273="+ a[273] +
"& 274="+ a[274] +
"& 275="+ a[275] +
"& 276="+ a[276] +
"& 277="+ a[277] +
"& 278="+ a[278] +
"& 279="+ a[279] +
"& 280="+ a[280] +
"& 281="+ a[281] +
"& 282="+ a[282] +
"& 283="+ a[283] +
"& 284="+ a[284] +
"& 285="+ a[285] +
"& 286="+ a[286] +
"& 287="+ a[287] +
"& 288="+ a[288] +
"& 289="+ a[289] +
"& 290="+ a[290] +
"& 291="+ a[291] +
"& 292="+ a[292] +
"& 293="+ a[293] +
"& 294="+ a[294] +
"& 295="+ a[295] +
"& 296="+ a[296] +
"& 297="+ a[297] +
"& 298="+ a[298] +
"& 299="+ a[299] +
"& 300="+ a[300] +
"& 301="+ a[301] +
"& 302="+ a[302] +
"& 303="+ a[303] +
"& 304="+ a[304] +
"& 305="+ a[305] +
"& 306="+ a[306] +
"& 307="+ a[307] +
"& 308="+ a[308] +
"& 309="+ a[309] +
"& 310="+ a[310] +
"& 311="+ a[311] +
"& 312="+ a[312] +
"& 313="+ a[313] +
"& 314="+ a[314] +
"& 315="+ a[315] +
"& 316="+ a[316] +
"& 317="+ a[317] +
"& 318="+ a[318] +
"& 319="+ a[319] +
"& 320="+ a[320] +
"& 321="+ a[321] +
"& 322="+ a[322] +
"& 323="+ a[323] +
"& 324="+ a[324] +
"& 325="+ a[325] +
"& 326="+ a[326] +
"& 327="+ a[327] +
"& 328="+ a[328] +
"& 329="+ a[329] +
"& 330="+ a[330] +
"& 331="+ a[331] +
"& 332="+ a[332] +
"& 333="+ a[333] +
"& 334="+ a[334] +
"& 335="+ a[335] +
"& 336="+ a[336] +
"& 337="+ a[337] +
"& 338="+ a[338] +
"& 339="+ a[339] +
"& 340="+ a[340] +
"& 341="+ a[341] +
"& 342="+ a[342] +
"& 343="+ a[343] +
"& 344="+ a[344] +
"& 345="+ a[345] +
"& 346="+ a[346] +
"& 347="+ a[347] +
"& 348="+ a[348] +
"& 349="+ a[349] +
"& 350="+ a[350] +
"& 351="+ a[351] +
"& 352="+ a[352] +
"& 353="+ a[353] +
"& 354="+ a[354] +
"& 355="+ a[355] +
"& 356="+ a[356] +
"& 357="+ a[357] +
"& 358="+ a[358] +
"& 359="+ a[359] +
"& 360="+ a[360] +
"& 361="+ a[361] +
"& 362="+ a[362] +
"& 363="+ a[363] +
"& 364="+ a[364] +
"& 365="+ a[365] +
"& 366="+ a[366] +
"& 367="+ a[367] +
"& 368="+ a[368] +
"& 369="+ a[369] +
"& 370="+ a[370] +
"& 371="+ a[371] +
"& 372="+ a[372] +
"& 373="+ a[373] +
"& 374="+ a[374] +
"& 375="+ a[375] +
"& 376="+ a[376] +
"& 377="+ a[377] +
"& 378="+ a[378] +
"& 379="+ a[379] +
"& 380="+ a[380] +
"& 381="+ a[381] +
"& 382="+ a[382] +
"& 383="+ a[383] +
"& 384="+ a[384] +
"& 385="+ a[385] +
"& 386="+ a[386] +
"& 387="+ a[387] +
"& 388="+ a[388] +
"& 389="+ a[389] +
"& 390="+ a[390] +
"& 391="+ a[391] +
"& 392="+ a[392] +
"& 393="+ a[393] +
"& 394="+ a[394] +
"& 395="+ a[395] +
"& 396="+ a[396] +
"& 397="+ a[397] +
"& 398="+ a[398] +
"& 399="+ a[399] +
"& 400="+ a[400] +
"& 401="+ a[401] +
"& 402="+ a[402] +
"& 403="+ a[403] +
"& 404="+ a[404] +
"& 405="+ a[405] +
"& 406="+ a[406] +
"& 407="+ a[407] +
"& 408="+ a[408] +
"& 409="+ a[409] +
"& 410="+ a[410] +
"& 411="+ a[411] +
"& 412="+ a[412] +
"& 413="+ a[413] +
"& 414="+ a[414] +
"& 415="+ a[415] +
"& 416="+ a[416] +
"& 417="+ a[417] +
"& 418="+ a[418] +
"& 419="+ a[419] +
"& 420="+ a[420] +
"& 421="+ a[421] +
"& 422="+ a[422] +
"& 423="+ a[423] +
"& 424="+ a[424] +
"& 425="+ a[425] +
"& 426="+ a[426] +
"& 427="+ a[427] +
"& 428="+ a[428] +
"& 429="+ a[429] +
"& 430="+ a[430] +
"& 431="+ a[431] +
"& 432="+ a[432] +
"& 433="+ a[433] +
"& 434="+ a[434] +
"& 435="+ a[435] +
"& 436="+ a[436] +
"& 437="+ a[437] +
"& 438="+ a[438] +
"& 439="+ a[439] +
"& 440="+ a[440] +
"& 441="+ a[441] +
"& 442="+ a[442] +
"& 443="+ a[443] +
"& 444="+ a[444] +
"& 445="+ a[445] +
"& 446="+ a[446] +
"& 447="+ a[447] +
"& 448="+ a[448] +
"& 449="+ a[449] +
"& 450="+ a[450] +
"& 451="+ a[451] +
"& 452="+ a[452] +
"& 453="+ a[453] +
"& 454="+ a[454] +
"& 455="+ a[455] +
"& 456="+ a[456] +
"& 457="+ a[457] +
"& 458="+ a[458] +
"& 459="+ a[459] +
"& 460="+ a[460] +
"& 461="+ a[461] +
"& 462="+ a[462] +
"& 463="+ a[463] +
"& 464="+ a[464] +
"& 465="+ a[465] +
"& 466="+ a[466] +
"& 467="+ a[467] +
"& 468="+ a[468] +
"& 469="+ a[469] +
"& 470="+ a[470] +
"& 471="+ a[471] +
"& 472="+ a[472] +
"& 473="+ a[473] +
"& 474="+ a[474] +
"& 475="+ a[475] +
"& 476="+ a[476] +
"& 477="+ a[477] +
"& 478="+ a[478] +
"& 479="+ a[479] +
"& 480="+ a[480] +
"& 481="+ a[481] +
"& 482="+ a[482] +
"& 483="+ a[483] +
"& 484="+ a[484] +
"& 485="+ a[485] +
"& 486="+ a[486] +
"& 487="+ a[487] +
"& 488="+ a[488] +
"& 489="+ a[489] +
"& 490="+ a[490] +
"& 491="+ a[491] +
"& 492="+ a[492] +
"& 493="+ a[493] +
"& 494="+ a[494] +
"& 495="+ a[495] +
"& 496="+ a[496] +
"& 497="+ a[497] +
"& 498="+ a[498] +
"& 499="+ a[499] +
"& 500="+ a[500] +
"& 501="+ a[501] +
"& 502="+ a[502] +
"& 503="+ a[503] +
"& 504="+ a[504] +
"& 505="+ a[505] +
"& 506="+ a[506] +
"& 507="+ a[507] +
"& 508="+ a[508] +
"& 509="+ a[509] +
"& 510="+ a[510] +
"& 511="+ a[511] +
"& 512="+ a[512] +
"& 513="+ a[513] +
"& 514="+ a[514] +
"& 515="+ a[515] +
"& 516="+ a[516] +
"& 517="+ a[517] +
"& 518="+ a[518] +
"& 519="+ a[519] +
"& 520="+ a[520] +
"& 521="+ a[521] +
"& 522="+ a[522] +
"& 523="+ a[523] +
"& 524="+ a[524] +
"& 525="+ a[525] +
"& 526="+ a[526] +
"& 527="+ a[527] +
"& 528="+ a[528] +
"& 529="+ a[529] +
"& 530="+ a[530] +
"& 531="+ a[531] +
"& 532="+ a[532] +
"& 533="+ a[533] +
"& 534="+ a[534] +
"& 535="+ a[535] +
"& 536="+ a[536] +
"& 537="+ a[537] +
"& 538="+ a[538] +
"& 539="+ a[539] +
"& 540="+ a[540] +
"& 541="+ a[541] +
"& 542="+ a[542] +
"& 543="+ a[543] +
"& 544="+ a[544] +
"& 545="+ a[545] +
"& 546="+ a[546] +
"& 547="+ a[547] +
"& 548="+ a[548] +
"& 549="+ a[549] +
"& 550="+ a[550] +
"& 551="+ a[551] +
"& 552="+ a[552] +
"& 553="+ a[553] +
"& 554="+ a[554] +
"& 555="+ a[555] +
"& 556="+ a[556] +
"& 557="+ a[557] +
"& 558="+ a[558] +
"& 559="+ a[559] +
"& 560="+ a[560] +
"& 561="+ a[561] +
"& 562="+ a[562] +
"& 563="+ a[563] +
"& 564="+ a[564] +
"& 565="+ a[565] +
"& 566="+ a[566] +
"& 567="+ a[567] +
"& 568="+ a[568] +
"& 569="+ a[569] +
"& 570="+ a[570] +
"& 571="+ a[571] +
"& 572="+ a[572] +
"& 573="+ a[573] +
"& 574="+ a[574] +
"& 575="+ a[575] +
"& 576="+ a[576] +
"& 577="+ a[577] +
"& 578="+ a[578] +
"& 579="+ a[579] +
"& 580="+ a[580] +
"& 581="+ a[581] +
"& 582="+ a[582] +
"& 583="+ a[583] +
"& 584="+ a[584] +
"& 585="+ a[585] +
"& 586="+ a[586] +
"& 587="+ a[587] +
"& 588="+ a[588] +
"& 589="+ a[589] +
"& 590="+ a[590] +
"& 591="+ a[591] +
"& 592="+ a[592] +
"& 593="+ a[593] +
"& 594="+ a[594] +
"& 595="+ a[595] +
"& 596="+ a[596] +
"& 597="+ a[597] +
"& 598="+ a[598] +
"& 599="+ a[599] +
"& 600="+ a[600] +
"& 601="+ a[601] +
"& 602="+ a[602] +
"& 603="+ a[603] +
"& 604="+ a[604] +
"& 605="+ a[605] +
"& 606="+ a[606] +
"& 607="+ a[607] +
"& 608="+ a[608] +
"& 609="+ a[609] +
"& 610="+ a[610] +
"& 611="+ a[611] +
"& 612="+ a[612] +
"& 613="+ a[613] +
"& 614="+ a[614] +
"& 615="+ a[615] +
"& 616="+ a[616] +
"& 617="+ a[617] +
"& 618="+ a[618] +
"& 619="+ a[619] +
"& 620="+ a[620] +
"& 621="+ a[621] +
"& 622="+ a[622] +
"& 623="+ a[623] +
"& 624="+ a[624] +
"& 625="+ a[625] +
"& 626="+ a[626] +
"& 627="+ a[627] +
"& 628="+ a[628] +
"& 629="+ a[629] +
"& 630="+ a[630] +
"& 631="+ a[631] +
"& 632="+ a[632] +
"& 633="+ a[633] +
"& 634="+ a[634] +
"& 635="+ a[635] +
"& 636="+ a[636] +
"& 637="+ a[637] +
"& 638="+ a[638] +
"& 639="+ a[639] +
"& 640="+ a[640] +
"& 641="+ a[641] +
"& 642="+ a[642] +
"& 643="+ a[643] +
"& 644="+ a[644] +
"& 645="+ a[645] +
"& 646="+ a[646] +
"& 647="+ a[647] +
"& 648="+ a[648] +
"& 649="+ a[649] +
"& 650="+ a[650] +
"& 651="+ a[651] +
"& 652="+ a[652] +
"& 653="+ a[653] +
"& 654="+ a[654] +
"& 655="+ a[655] +
"& 656="+ a[656] +
"& 657="+ a[657] +
"& 658="+ a[658] +
"& 659="+ a[659] +
"& 660="+ a[660] +
"& 661="+ a[661] +
"& 662="+ a[662] +
"& 663="+ a[663] +
"& 664="+ a[664] +
"& 665="+ a[665] +
"& 666="+ a[666] +
"& 667="+ a[667] +
"& 668="+ a[668] +
"& 669="+ a[669] +
"& 670="+ a[670] +
"& 671="+ a[671] +
"& 672="+ a[672] +
"& 673="+ a[673] +
"& 674="+ a[674] +
"& 675="+ a[675] +
"& 676="+ a[676] +
"& 677="+ a[677] +
"& 678="+ a[678] +
"& 679="+ a[679] +
"& 680="+ a[680] +
"& 681="+ a[681] +
"& 682="+ a[682] +
"& 683="+ a[683] +
"& 684="+ a[684] +
"& 685="+ a[685] +
"& 686="+ a[686] +
"& 687="+ a[687] +
"& 688="+ a[688] +
"& 689="+ a[689] +
"& 690="+ a[690] +
"& 691="+ a[691] +
"& 692="+ a[692] +
"& 693="+ a[693] +
"& 694="+ a[694] +
"& 695="+ a[695] +
"& 696="+ a[696] +
"& 697="+ a[697] +
"& 698="+ a[698] +
"& 699="+ a[699] +
"& 700="+ a[700] +
"& 701="+ a[701] +
"& 702="+ a[702] +
"& 703="+ a[703] +
"& 704="+ a[704] +
"& 705="+ a[705] +
"& 706="+ a[706] +
"& 707="+ a[707] +
"& 708="+ a[708] +
"& 709="+ a[709] +
"& 710="+ a[710] +
"& 711="+ a[711] +
"& 712="+ a[712] +
"& 713="+ a[713] +
"& 714="+ a[714] +
"& 715="+ a[715] +
"& 716="+ a[716] +
"& 717="+ a[717] +
"& 718="+ a[718] +
"& 719="+ a[719] +
"& 720="+ a[720] +
"& 721="+ a[721] +
"& 722="+ a[722] +
"& 723="+ a[723] +
"& 724="+ a[724] +
"& 725="+ a[725] +
"& 726="+ a[726] +
"& 727="+ a[727] +
"& 728="+ a[728] +
"& 729="+ a[729] +
"& 730="+ a[730] +
"& 731="+ a[731] +
"& 732="+ a[732] +
"& 733="+ a[733] +
"& 734="+ a[734] +
"& 735="+ a[735] +
"& 736="+ a[736] +
"& 737="+ a[737] +
"& 738="+ a[738] +
"& 739="+ a[739] +
"& 740="+ a[740] +
"& 741="+ a[741] +
"& 742="+ a[742] +
"& 743="+ a[743] +
"& 744="+ a[744] +
"& 745="+ a[745] +
"& 746="+ a[746] +
"& 747="+ a[747] +
"& 748="+ a[748] +
"& 749="+ a[749] +
"& 750="+ a[750] +
"& 751="+ a[751] +
"& 752="+ a[752] +
"& 753="+ a[753] +
"& 754="+ a[754] +
"& 755="+ a[755] +
"& 756="+ a[756] +
"& 757="+ a[757] +
"& 758="+ a[758] +
"& 759="+ a[759] +
"& 760="+ a[760] +
"& 761="+ a[761] +
"& 762="+ a[762] +
"& 763="+ a[763] +
"& 764="+ a[764] +
"& 765="+ a[765] +
"& 766="+ a[766] +
"& 767="+ a[767] +
"& 768="+ a[768] +
"& 769="+ a[769] +
"& 770="+ a[770] +
"& 771="+ a[771] +
"& 772="+ a[772] +
"& 773="+ a[773] +
"& 774="+ a[774] +
"& 775="+ a[775] +
"& 776="+ a[776] +
"& 777="+ a[777] +
"& 778="+ a[778] +
"& 779="+ a[779] +
"& 780="+ a[780] +
"& 781="+ a[781] +
"& 782="+ a[782] +
"& 783="+ a[783] +
"& 784="+ a[784] +
"& 785="+ a[785] +
"& 786="+ a[786] +
"& 787="+ a[787] +
"& 788="+ a[788] +
"& 789="+ a[789] +
"& 790="+ a[790] +
"& 791="+ a[791] +
"& 792="+ a[792] +
"& 793="+ a[793] +
"& 794="+ a[794] +
"& 795="+ a[795] +
"& 796="+ a[796] +
"& 797="+ a[797] +
"& 798="+ a[798] +
"& 799="+ a[799] +
"& 800="+ a[800] +
"& 801="+ a[801] +
"& 802="+ a[802] +
"& 803="+ a[803] +
"& 804="+ a[804] +
"& 805="+ a[805] +
"& 806="+ a[806] +
"& 807="+ a[807] +
"& 808="+ a[808] +
"& 809="+ a[809] +
"& 810="+ a[810] +
"& 811="+ a[811] +
"& 812="+ a[812] +
"& 813="+ a[813] +
"& 814="+ a[814] +
"& 815="+ a[815] +
"& 816="+ a[816] +
"& 817="+ a[817] +
"& 818="+ a[818] +
"& 819="+ a[819] +
"& 820="+ a[820] +
"& 821="+ a[821] +
"& 822="+ a[822] +
"& 823="+ a[823] +
"& 824="+ a[824] +
"& 825="+ a[825] +
"& 826="+ a[826] +
"& 827="+ a[827] +
"& 828="+ a[828] +
"& 829="+ a[829] +
"& 830="+ a[830] +
"& 831="+ a[831] +
"& 832="+ a[832] +
"& 833="+ a[833] +
"& 834="+ a[834] +
"& 835="+ a[835] +
"& 836="+ a[836] +
"& 837="+ a[837] +
"& 838="+ a[838] +
"& 839="+ a[839] +
"& 840="+ a[840] +
"& 841="+ a[841] +
"& 842="+ a[842] +
"& 843="+ a[843] +
"& 844="+ a[844] +
"& 845="+ a[845] +
"& 846="+ a[846] ,

                success:
				//function(data){
                //$('form#forma').html(data);
				//				}
				function(data){
                    $('form#forma').hide(function(){$('div.success').fadeIn();});
					pst.html(data);
				}
	
            });
        return false;
        });

										   });


function oznaci() {
		var b = new Array();
		var j=0;
		var randomNumber
		
		for(j = 0; j <= 846; j++){
			b[j] = document.getElementById(j);
			randomNumber = Math.floor(Math.random()*101);
			b[j].value = randomNumber;
		}		
}

	function provjera(x) {
	
	var a = document.getElementById(x).value
	var filter = /^[1-9]?[0-9]{1}$|^100$/
	
	if(!filter.test(a)){
		document.getElementById(x).value = "";
		}

					}
