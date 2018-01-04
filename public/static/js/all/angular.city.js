angular.module('myApp', [])
.filter('cityfil',function(){
	return function(data,parent){
		var fil=[];
		angular.forEach(data,function(obj){
			if (obj.parent===parent) {
				fil.push(obj)
			}
		})
		return fil;
	}
})
.controller('firstController', function ($scope) {

	$scope.cities=[
	{name:'北京',parent:0,id:1,},
	{name:'上海',parent:0,id:2,},
	{name:'天津',parent:0,id:3,},
	{name:'重庆',parent:0,id:4,},
	{name:'黑龙江',parent:0,id:5,},
	{name:'吉林',parent:0,id:6,},
	{name:'辽宁',parent:0,id:7,},
	{name:'内蒙古',parent:0,id:8,},
	{name:'宁夏',parent:0,id:9,},
	{name:'新疆',parent:0,id:10,},
	{name:'青海',parent:0,id:11,},
	{name:'甘肃',parent:0,id:12, },
	{name:'陕西',parent:0,id:13,},
	{name:'河北',parent:0,id:14,},
	{name:'河南',parent:0,id:15,},
	{name:'山东',parent:0,id:16,},
	{name:'山西',parent:0,id:17,},
	{name:'湖北',parent:0,id:18,},
	{name:'湖南',parent:0,id:19,},
	{name:'安徽',parent:0,id:20,},
	{name:'江苏',parent:0,id:21,},
	{name:'浙江',parent:0,id:22,},
	{name:'江西',parent:0,id:23,},
	{name:'广东',parent:0,id:24,},
	{name:'广西',parent:0,id:25,},
	{name:'福建',parent:0,id:26,},
	{name:'四川',parent:0,id:27,},
	{name:'云南',parent:0,id:28,},
	{name:'贵州',parent:0,id:29,},
	{name:'西藏',parent:0,id:30,},
	{name:'海南',parent:0,id:31,},
	{name:'香港',parent:0,id:32,},
	{name:'澳门',parent:0,id:33,},
	{name:'台湾',parent:0,id:34,},

	{name:'台湾省',parent:34,id:34341,}, 

	{name:'台北',parent:34341,id:34341-1,},{name:'高雄',parent:34341,id:34341-2,},{name:'台中',parent:34341,id:34341-3,},{name:'花莲',parent:34341,id:34341-4,},{name:'基隆',parent:34341,id:34341-5,},{name:'嘉义',parent:34341,id:34341-6,},{name:'金门',parent:34341,id:34341-7,},{name:'连江',parent:34341,id:34341-8,},{name:'苗栗',parent:34341,id:34341-9,},{name:'南投',parent:34341,id:34341-10,},{name:'澎湖',parent:34341,id:34341-11,},{name:'屏东',parent:34341,id:34341-12,},{name:'台东',parent:34341,id:34341-13,},{name:'台南',parent:34341,id:34341-14,},{name:'桃园',parent:34341,id:34341-15,},{name:'新竹',parent:34341,id:34341-16,},{name:'宜兰',parent:34341,id:34341-17,},{name:'云林',parent:34341,id:34341-18,},{name:'彰化',parent:34341,id:34341-19,},

	{name:'澳门特别行政区',parent:33,id:33331,}, 
	　　 {name:'花地玛堂区',parent:32322,id:32322-1,},{name:'圣安多尼堂区',parent:32322,id:32322-2,},{name:' 大堂区',parent:32322,id:32322-3,},{name:'望德堂区',parent:32322,id:32322-4,},{name:' 风顺堂区',parent:32322,id:32322-5,},
	{name:'嘉模堂区',parent:32322,id:32322-6,},{name:'  圣方济各堂区',parent:32322,id:32322-7,},
	{name:'香港岛',parent:32,id:32321,},
	{name:'中西区',parent:32321,id:32321-1,},{name:'湾仔区',parent:32321,id:32321-2,},{name:'东区',parent:32321,id:32321-3,},{name:'南区',parent:32321,id:32321-4,},

	{name:'九龙',parent:32,id:32322,},
	{name:'九龙城区',parent:32322,id:32322-1,},{name:'油尖旺区',parent:32322,id:32322-2,},{name:'观塘区',parent:32322,id:32322-3,},{name:'黄大仙区',parent:32322,id:32322-4,},{name:'深水埗区',parent:32322,id:32322-5,},

	{name:'新界东',parent:32,id:32323,},
	{name:'北区',parent:32323,id:32323-1,},{name:'大埔区',parent:32323,id:32323-2,},{name:'沙田区',parent:32323,id:32323-3,},{name:'西贡区',parent:32323,id:32323-4,},
	{name:'新界西',parent:32,id:32324,}, 
	{name:'元朗区',parent:32324,id:32324-1,},{name:'屯门区',parent:32324,id:32324-2,},{name:'荃湾区',parent:32324,id:32324-3,},{name:'葵青区',parent:32324,id:32324-4,},{name:'离岛区',parent:32324,id:32324-5,},

	{name:'海口市',parent:31,id:31311,}, 
	{name:'秀英区',parent:31311,id:31311-1,},{name:'龙华区',parent:31311,id:31311-2,},{name:'琼山区',parent:31311,id:31311-3,},{name:'美兰区',parent:31311,id:31311-4,},


	{name:'三亚市',parent:31,id:31312,}, 
	{name:'吉阳区',parent:31312,id:31312-1,},{name:'崖州区',parent:31312,id:31312-2,},{name:'天涯区',parent:31312,id:31312-3,},{name:'海棠区',parent:31312,id:31312-4,},

	{name:'三沙市',parent:31,id:31313,}, 
	{name:'永兴镇',parent:31313,id:31313-1,},

	{name:'儋州市',parent:31,id:31314,},
	{name:'那大镇',parent:31314,id:31314-1,},{name:'南丰镇',parent:31314,id:31314-2,},{name:'雅星镇',parent:31314,id:31314-3,},{name:'和庆镇',parent:31314,id:31314-4,},{name:'大成镇',parent:31314,id:31314-5,},{name:'新州镇',parent:31314,id:31314-6,},{name:'光村镇',parent:31314,id:31314-7,},{name:'东成镇',parent:31314,id:31314-8,},{name:'中和镇',parent:31314,id:31314-9,},{name:'峨蔓镇',parent:31314,id:31314-10,},{name:'兰洋镇',parent:31314,id:31314-11,},{name:'王五镇',parent:31314,id:31314-12,},{name:'排浦镇',parent:31314,id:31314-13,},{name:'海头镇',parent:31314,id:31314-14,},{name:'木棠镇',parent:31314,id:31314-15,},{name:'白马井镇',parent:31314,id:31314-16,},{name:'三都办事处',parent:31314,id:31314-17,},

	{name:'省直辖县级行政单位',parent:31,id:31315,}, 

	{name:'五指山市（通什镇）',parent:31315,id:31315-1,},{name:'琼海市（嘉积镇）',parent:31315,id:31315-2,},{name:'文昌市（文城镇）',parent:31315,id:31315-3,},{name:'万宁市（万城镇）',parent:31315,id:31315-4,},{name:'东方市（八所镇）',parent:31315,id:31315-5,},{name:'定安县（定城镇）',parent:31315,id:31315-6,},{name:'屯昌县（屯城镇）',parent:31315,id:31315-7,},{name:'澄迈县（金江镇）',parent:31315,id:31315-8,},{name:'临高县（临城镇）',parent:31315,id:31315-9,},{name:'白沙黎族自治县（牙叉镇）',parent:31315,id:31315-10,},{name:'昌江黎族自治县（石碌镇）',parent:31315,id:31315-11,},{name:'乐东黎族自治县（抱由镇）',parent:31315,id:31315-12,},{name:'陵水黎族自治县（椰林镇）',parent:31315,id:31315-13,},{name:'保亭黎族苗族自治县（保城镇）',parent:31315,id:31315-14,},{name:'琼中黎族苗族自治县（营根镇）',parent:31315,id:31315-15,},

	{name:'洋浦经济开发区',parent:31,id:31316,}, 
	{name:'干冲区',parent:31316,id:31316-1,},

	{name:'拉萨市',parent:30,id:30301,}, 

	{name:'城关区',parent:30301,id:30301-1,},{name:'林周县',parent:30301,id:30301-2,},{name:'甘丹曲果镇',parent:30301,id:30301-3,},{name:'当雄县',parent:30301,id:30301-4,},{name:'当曲卡镇',parent:30301,id:30301-5,},{name:'尼木县',parent:30301,id:30301-6,},{name:'塔荣镇',parent:30301,id:30301-7,},{name:'曲水县',parent:30301,id:30301-8,},{name:'曲水镇',parent:30301,id:30301-9,},{name:'堆龙德庆县',parent:30301,id:30301-10,},{name:'东嘎镇',parent:30301,id:30301-11,},{name:'达孜县',parent:30301,id:30301-12,},{name:'德庆镇',parent:30301,id:30301-13,},{name:'墨竹工卡县',parent:30301,id:30301-14,},{name:'工卡镇',parent:30301,id:30301-15,},

	{name:'那曲地区',parent:30,id:30302,}, 

	{name:'那曲县',parent:30302,id:30302-1,},{name:'那曲镇',parent:30302,id:30302-2,},{name:'嘉黎县',parent:30302,id:30302-3,},{name:'阿扎镇',parent:30302,id:30302-4,},{name:'比如县',parent:30302,id:30302-5,},{name:'比如镇',parent:30302,id:30302-6,},{name:'聂荣县',parent:30302,id:30302-7,},{name:'聂荣镇',parent:30302,id:30302-8,},{name:'安多县',parent:30302,id:30302-9,},{name:'帕那镇',parent:30302,id:30302-10,},{name:'申扎县',parent:30302,id:30302-11,},{name:'申扎镇',parent:30302,id:30302-12,},{name:'索县',parent:30302,id:30302-13,},{name:'亚拉镇',parent:30302,id:30302-14,},{name:'班戈县',parent:30302,id:30302-15,},{name:'普保镇',parent:30302,id:30302-16,},{name:'巴青县',parent:30302,id:30302-17,},{name:'拉西镇',parent:30302,id:30302-18,},{name:'尼玛县',parent:30302,id:30302-19,},{name:'尼玛镇',parent:30302,id:30302-20,},

	{name:'昌都地区',parent:30,id:30303,}, 

	{name:'昌都县',parent:30303,id:30303-1,},{name:'城关镇',parent:30303,id:30303-2,},{name:'江达县',parent:30303,id:30303-3,},{name:'江达镇',parent:30303,id:30303-4,},{name:'贡觉县',parent:30303,id:30303-5,},{name:'莫洛镇',parent:30303,id:30303-6,},{name:'类乌齐县',parent:30303,id:30303-7,},{name:'桑多镇',parent:30303,id:30303-8,},{name:'丁青县',parent:30303,id:30303-9,},{name:'丁青镇',parent:30303,id:30303-10,},{name:'察雅县',parent:30303,id:30303-11,},{name:'烟多镇',parent:30303,id:30303-12,},{name:'八宿县',parent:30303,id:30303-13,},{name:'白玛镇',parent:30303,id:30303-14,},{name:'左贡县',parent:30303,id:30303-15,},{name:'旺达镇',parent:30303,id:30303-16,},{name:'芒康县',parent:30303,id:30303-17,},{name:'嘎托镇',parent:30303,id:30303-18,},{name:'洛隆县',parent:30303,id:30303-19,},{name:'孜托镇',parent:30303,id:30303-20,},{name:'边坝县',parent:30303,id:30303-21,},{name:'草卡镇',parent:30303,id:30303-22,},

	{name:'林芝地区',parent:30,id:30304,}, 

	{name:'林芝县',parent:30304,id:30304-1,},{name:'八一镇',parent:30304,id:30304-2,},{name:'工布江达县',parent:30304,id:30304-3,},{name:'工布江达镇',parent:30304,id:30304-4,},{name:'米林县',parent:30304,id:30304-5,},{name:'米林镇',parent:30304,id:30304-6,},{name:'墨脱县',parent:30304,id:30304-7,},{name:'墨脱镇',parent:30304,id:30304-8,},{name:'波密县',parent:30304,id:30304-9,},{name:'扎木镇',parent:30304,id:30304-10,},{name:'察隅县',parent:30304,id:30304-11,},{name:'竹瓦根镇',parent:30304,id:30304-12,},{name:'朗县',parent:30304,id:30304-13,},{name:'朗镇',parent:30304,id:30304-14,},

	{name:'山南地区',parent:30,id:30305,}, 

	{name:'乃东县',parent:30305,id:30305-1,},{name:'泽当镇',parent:30305,id:30305-2,},{name:'扎囊县',parent:30305,id:30305-3,},{name:'扎塘镇',parent:30305,id:30305-4,},{name:'贡嘎县',parent:30305,id:30305-5,},{name:'吉雄镇',parent:30305,id:30305-6,},{name:'桑日县',parent:30305,id:30305-7,},{name:'桑日镇',parent:30305,id:30305-8,},{name:'波密县',parent:30305,id:30305-9,},{name:'扎木镇',parent:30305,id:30305-10,},{name:'察隅县',parent:30305,id:30305-11,},{name:'竹瓦根镇',parent:30305,id:30305-12,},{name:'朗县',parent:30305,id:30305-13,},{name:'朗镇',parent:30305,id:30305-14,},{name:'琼结县',parent:30305,id:30305-15,},{name:'琼结镇',parent:30305,id:30305-16,},{name:'曲松县',parent:30305,id:30305-17,},{name:'曲松镇',parent:30305,id:30305-18,},{name:'措美县',parent:30305,id:30305-19,},{name:'措美镇',parent:30305,id:30305-20,},{name:'洛扎县',parent:30305,id:30305-21,},{name:'洛扎镇',parent:30305,id:30305-22,},{name:'加查县',parent:30305,id:30305-23,},{name:'安绕镇',parent:30305,id:30305-24,},{name:'隆子县',parent:30305,id:30305-25,},{name:'隆子镇',parent:30305,id:30305-26,},{name:'错那县',parent:30305,id:30305-27,},{name:'错那镇',parent:30305,id:30305-28,},{name:'浪卡子县',parent:30305,id:30305-29,},{name:'浪卡子镇',parent:30305,id:30305-30,},



	{name:'日喀则地区',parent:30,id:30306,}, 

	{name:'日喀则市',parent:30306,id:30306-1,},{name:'南木林县',parent:30306,id:30306-2,},{name:'南木林镇',parent:30306,id:30306-3,},{name:'江孜县',parent:30306,id:30306-4,},{name:'江孜镇',parent:30306,id:30306-5,},{name:'定日县',parent:30306,id:30306-6,},{name:'协格尔镇',parent:30306,id:30306-7,},{name:'萨迦县',parent:30306,id:30306-8,},{name:'萨迦镇',parent:30306,id:30306-9,},{name:'拉孜县',parent:30306,id:30306-10,},{name:'曲下镇',parent:30306,id:30306-11,},{name:'昂仁县',parent:30306,id:30306-12,},{name:'卡嘎镇',parent:30306,id:30306-13,},{name:'卡嘎镇',parent:30306,id:30306-14,},{name:'琼结县',parent:30306,id:30306-15,},{name:'白朗县',parent:30306,id:30306-16,},{name:'洛江镇',parent:30306,id:30306-17,},{name:'仁布县',parent:30306,id:30306-18,},{name:'德吉林镇',parent:30306,id:30306-19,},{name:'康马县',parent:30306,id:30306-20,},{name:'康马镇',parent:30306,id:30306-21,},{name:'定结县',parent:30306,id:30306-22,},{name:'江嘎镇',parent:30306,id:30306-23,},{name:'仲巴县',parent:30306,id:30306-24,},{name:'拉让乡',parent:30306,id:30306-25,},{name:'亚东县',parent:30306,id:30306-26,},{name:'下司马镇',parent:30306,id:30306-27,},{name:'吉隆县',parent:30306,id:30306-28,},{name:'宗嘎镇',parent:30306,id:30306-29,},{name:'聂拉木县',parent:30306,id:30306-30,},{name:'聂拉木镇',parent:30306,id:30306-31,},{name:'萨嘎县',parent:30306,id:30306-32,},{name:'加加镇',parent:30306,id:30306-33,},{name:'岗巴县',parent:30306,id:30306-34,},{name:'岗巴镇',parent:30306,id:30306-35,},

	{name:'阿里地区',parent:30,id:30307,}, 

	{name:'噶尔县',parent:30307,id:30307-1,},{name:'狮泉河镇',parent:30307,id:30307-2,},{name:'普兰县',parent:30307,id:30307-3,},{name:'普兰镇',parent:30307,id:30307-4,},{name:'札达县',parent:30307,id:30307-5,},{name:'托林镇',parent:30307,id:30307-6,},{name:'日土县',parent:30307,id:30307-7,},{name:'日土镇',parent:30307,id:30307-8,},{name:'萨迦镇',parent:30307,id:30307-9,},{name:'革吉县',parent:30307,id:30307-10,},{name:'革吉镇',parent:30307,id:30307-11,},{name:'改则县',parent:30307,id:30307-12,},{name:'改则镇',parent:30307,id:30307-13,},{name:'措勤县',parent:30307,id:30307-14,},{name:'措勤镇',parent:30307,id:30307-15,},{name:'八一镇',parent:30307,id:30307-16,},

	{name:'贵阳市',parent:29,id:29291,},

	{name:'乌当区',parent:29291,id:29291-1,},{name:'南明区',parent:29291,id:29291-2,},{name:'云岩区',parent:29291,id:29291-3,},{name:'花溪区',parent:29291,id:29291-4,},{name:'白云区',parent:29291,id:29291-5,},{name:'小河区',parent:29291,id:29291-6,},{name:'清镇市',parent:29291,id:29291-7,},{name:'开阳县',parent:29291,id:29291-8,},{name:'城关镇',parent:29291,id:29291-9,},{name:'修文县',parent:29291,id:29291-10,},{name:'龙场镇',parent:29291,id:29291-11,},{name:'息烽县',parent:29291,id:29291-12,},{name:'永靖镇',parent:29291,id:29291-13,},

	{name:'六盘水市',parent:29,id:29292,}, 
	{name:'钟山区',parent:29292,id:29292-1,},{name:'盘县',parent:29292,id:29292-2,},{name:'红果镇',parent:29292,id:29292-3,},{name:'六枝特区',parent:29292,id:29292-4,},{name:'平寨镇',parent:29292,id:29292-5,},{name:'水城县',parent:29292,id:29292-6,},

	{name:'遵义市',parent:29,id:29293,}, 


	{name:'红花岗区',parent:29291,id:29291-1,},{name:'汇川区',parent:29291,id:29291-2,},{name:'赤水市',parent:29291,id:29291-3,},{name:'仁怀市',parent:29291,id:29291-4,},{name:'遵义县',parent:29291,id:29291-5,},{name:'南白镇',parent:29291,id:29291-6,},{name:'桐梓县',parent:29291,id:29291-7,},{name:'娄山关镇',parent:29291,id:29291-8,},{name:'绥阳县',parent:29291,id:29291-9,},{name:'洋川镇',parent:29291,id:29291-10,},{name:'正安县',parent:29291,id:29291-11,},{name:'凤仪镇',parent:29291,id:29291-12,},{name:'凤冈县',parent:29291,id:29291-13,},{name:'龙泉镇',parent:29291,id:29291-14,},{name:'湄潭县',parent:29291,id:29291-15,},{name:'湄江镇',parent:29291,id:29291-16,},{name:'余庆县',parent:29291,id:29291-17,},{name:'白泥镇',parent:29291,id:29291-18,},{name:'习水县',parent:29291,id:29291-19,},{name:'东皇镇',parent:29291,id:29291-20,},{name:'道真仡佬族苗族自治县',parent:29291,id:29291-21,},{name:'玉溪镇',parent:29291,id:29291-22,},{name:'务川仡佬族苗族自治县',parent:29291,id:29291-23,},{name:'都濡镇',parent:29291,id:29291-24,},


	{name:'安顺市',parent:29,id:29294,}, 


	{name:'毕节地区',parent:29,id:29295,}, 
	{name:'铜仁地区',parent:29,id:29296,}, 
	{name:'黔东南州',parent:29,id:29297,}, 
	{name:'黔南州',parent:29,id:29298,}, 
	{name:'黔西南州',parent:29,id:29299,}, 



	{name:'昆明市',parent:28,id:28281,}, 
	{name:'曲靖市',parent:28,id:28282,}, 
	{name:'玉溪市',parent:28,id:28283,}, 
	{name:'保山市',parent:28,id:28284,}, 
	{name:'昭通市',parent:28,id:28285,}, 
	{name:'丽江市',parent:28,id:28286,}, 
	{name:'思茅市',parent:28,id:28287,}, 
	{name:'临沧市',parent:28,id:28288,}, 
	{name:'德宏州',parent:28,id:28289,}, 
	{name:'怒江州',parent:28,id:282810,}, 
	{name:'迪庆州',parent:28,id:282811,}, 
	{name:'大理州',parent:28,id:282812,}, 
	{name:'楚雄州',parent:28,id:282813,}, 
	{name:'红河州',parent:28,id:282814,}, 
	{name:'文山州',parent:28,id:282815,}, 
	{name:'西双版纳州',parent:28,id:282816,}, 



	{name:'成都市',parent:27,id:27271,}, 
	{name:'广元市',parent:27,id:27272,}, 
	{name:'绵阳市',parent:27,id:27273,}, 
	{name:'德阳市',parent:27,id:27274,}, 
	{name:'南充市',parent:27,id:27275,}, 
	{name:'广安市',parent:27,id:27276,}, 
	{name:'遂宁市',parent:27,id:27277,}, 
	{name:'内江市',parent:27,id:27278,}, 
	{name:'乐山市',parent:27,id:27279,}, 
	{name:'自贡市',parent:27,id:272710,}, 
	{name:'泸州市',parent:27,id:272711,}, 
	{name:'宜宾市',parent:27,id:272712,}, 
	{name:'攀枝花市',parent:27,id:272713,}, 
	{name:'巴中市',parent:27,id:272714,}, 
	{name:'达州市',parent:27,id:272715,}, 
	{name:'资阳市',parent:27,id:272716,}, 
	{name:'眉山市',parent:27,id:272717,},
	{name:'雅安市',parent:27,id:272718,},
	{name:'阿坝州',parent:27,id:272719,}, 
	{name:'甘孜州',parent:27,id:272720,},
	{name:'凉山州',parent:27,id:272721,},



	{name:'福州市',parent:26,id:26261,}, 
	{name:'南平市',parent:26,id:26262,}, 
	{name:'莆田市',parent:26,id:26263,}, 
	{name:'三明市',parent:26,id:26264,}, 
	{name:'泉州市',parent:26,id:26265,}, 
	{name:'厦门市',parent:26,id:26266,}, 
	{name:'漳州市',parent:26,id:26267,}, 
	{name:'龙岩市',parent:26,id:26268,}, 
	{name:'宁德市',parent:26,id:26269,}, 

	{name:'南宁市',parent:25,id:25251,}, 
	{name:'桂林市',parent:25,id:25252,}, 
	{name:'柳州市',parent:25,id:25253,}, 
	{name:'梧州市',parent:25,id:25254,}, 
	{name:'贵港市',parent:25,id:25255,}, 
	{name:'玉林市',parent:25,id:25256,}, 
	{name:'钦州市',parent:25,id:25257,}, 
	{name:'北海市',parent:25,id:25258,}, 
	{name:'防城港市',parent:25,id:25259,}, 
	{name:'崇左市',parent:25,id:252510,}, 
	{name:'百色市',parent:25,id:252511,}, 
	{name:'河池市',parent:25,id:252512,}, 
	{name:'来宾市',parent:25,id:252513,}, 
	{name:'贺州市',parent:25,id:252514,}, 


	{name:'广州市',parent:24,id:24241,}, 
	{name:'深圳市',parent:24,id:24242,}, 
	{name:'清远市',parent:24,id:24243,}, 
	{name:'韶关市',parent:24,id:24244,}, 
	{name:'河源市',parent:24,id:24245,}, 
	{name:'梅州市',parent:24,id:24246,}, 
	{name:'潮州市',parent:24,id:24247,}, 
	{name:'汕头市',parent:24,id:24248,}, 
	{name:'揭阳市',parent:24,id:24249,}, 
	{name:'汕尾市',parent:24,id:242410,}, 
	{name:'惠州市',parent:24,id:242411,}, 
	{name:'东莞市',parent:24,id:242412,}, 
	{name:'珠海市',parent:24,id:242413,}, 
	{name:'中山市',parent:24,id:242414,}, 
	{name:'江门市',parent:24,id:242415,}, 
	{name:'佛山市',parent:24,id:242416,}, 
	{name:'肇庆市',parent:24,id:242417,},
	{name:'云浮市',parent:24,id:242418,},
	{name:'阳江市',parent:24,id:242419,}, 
	{name:'茂名市',parent:24,id:242420,},
	{name:'湛江市',parent:24,id:242421,},

	{name:'南昌市',parent:23,id:23231,}, 
	{name:'九江市',parent:23,id:23232,}, 
	{name:'景德镇市',parent:23,id:23233,}, 
	{name:'鹰潭市',parent:23,id:23234,}, 
	{name:'新余市',parent:23,id:23235,}, 
	{name:'萍乡市',parent:23,id:23236,}, 
	{name:'淮南市',parent:23,id:23237,}, 
	{name:'赣州市',parent:23,id:23238,}, 
	{name:'上饶市',parent:23,id:23239,}, 
	{name:'抚州市',parent:23,id:232310,}, 
	{name:'宜春市',parent:23,id:232311,}, 
	{name:'吉安市',parent:23,id:232312,}, 


	{name:'杭州市',parent:22,id:22221,}, 

	{name:'拱墅区',parent:22221,id:22221-1,},{name:'上城区',parent:22221,id:22221-2,},{name:'下城区',parent:22221,id:22221-3,},{name:'江干区',parent:22221,id:22221-4,},{name:'西湖区',parent:22221,id:22221-5,},{name:'滨江区',parent:22221,id:22221-6,},{name:'余杭区',parent:22221,id:22221-7,},{name:'萧山区',parent:22221,id:22221-8,},{name:'临安市',parent:22221,id:22221-9,},{name:'富阳市',parent:22221,id:22221-10,},{name:'建德市',parent:22221,id:22221-11,},{name:'桐庐县',parent:22221,id:22221-12,},{name:'淳安县',parent:22221,id:22221-13,},{name:'千岛湖镇',parent:22221,id:22221-14,},


	{name:'湖州市',parent:22,id:22222,}, 
	{name:'吴兴区',parent:22222,id:22222-1,},{name:'南浔区',parent:22222,id:22222-2,},{name:'长兴县',parent:22222,id:22222-3,},{name:'雉城镇',parent:22222,id:22222-4,},{name:'德清县',parent:22222,id:22222-5,},{name:'武康镇',parent:22222,id:22222-6,},{name:'安吉县',parent:22222,id:22222-7,},{name:'递铺镇',parent:22222,id:22222-8,},

	{name:'嘉兴市',parent:22,id:22223,}, 
	{name:'南湖区',parent:22223,id:22223-1,},{name:'秀洲区',parent:22223,id:22223-2,},{name:'平湖市',parent:22223,id:22223-3,},{name:'海宁市',parent:22223,id:22223-4,},{name:'桐乡市',parent:22223,id:22223-5,},{name:'嘉善县',parent:22223,id:22223-6,},{name:'魏塘镇',parent:22223,id:22223-7,},{name:'海盐县',parent:22223,id:22223-8,},{name:'武原镇',parent:22223,id:22223-9,},

	{name:'舟山市',parent:22,id:22224,},
	{name:'定海区',parent:22224,id:22224-1,},{name:'普陀区',parent:22224,id:22224-2,},{name:'岱山县',parent:22224,id:22224-3,},{name:'高亭镇',parent:22224,id:22224-4,},{name:'嵊泗县',parent:22224,id:22224-5,},{name:'菜园镇',parent:22224,id:22224-6,},


	{name:'宁波市',parent:22,id:22225,}, 
	{name:'海曙区',parent:22225,id:22225-1,},{name:'江东区',parent:22225,id:22225-2,},{name:'江北区',parent:22225,id:22225-3,},{name:'北仑区',parent:22225,id:22225-4,},{name:'镇海区',parent:22225,id:22225-5,},{name:'鄞州区',parent:22225,id:22225-6,},{name:'慈溪市',parent:22225,id:22225-7,},{name:'余姚市',parent:22225,id:22225-8,},{name:'奉化市',parent:22225,id:22225-9,},{name:'宁海县',parent:22225,id:22225-10,},{name:'象山县',parent:22225,id:22225-11,},


	{name:'绍兴市',parent:22,id:22226,}, 
	{name:'越城区',parent:22226,id:22226-1,},{name:'诸暨市',parent:22226,id:22226-2,},{name:'上虞市',parent:22226,id:22226-3,},{name:'嵊州市',parent:22226,id:22226-4,},{name:'绍兴县',parent:22226,id:22226-5,},{name:'新昌县',parent:22226,id:22226-6,},{name:'城关镇',parent:22226,id:22226-7,},

	{name:'衢州市',parent:22,id:22227,}, 
	{name:'柯城区',parent:22227,id:22227-1,},{name:'衢江区',parent:22227,id:22227-2,},{name:'江山市',parent:22227,id:22227-3,},{name:'常山县',parent:22227,id:22227-4,},{name:'天马镇',parent:22227,id:22227-5,},{name:'开化县',parent:22227,id:22227-6,},{name:'城关镇',parent:22227,id:22227-7,},{name:'龙游县',parent:22227,id:22227-8,},


	{name:'金华市',parent:22,id:22228,}, 
	{name:'婺城区',parent:22228,id:22228-1,},{name:'金东区',parent:22228,id:22228-2,},{name:'兰溪市',parent:22228,id:22228-3,},{name:'永康市',parent:22228,id:22228-4,},{name:'义乌市',parent:22228,id:22228-5,},{name:'东阳市',parent:22228,id:22228-6,},{name:'武义县',parent:22228,id:22228-7,},{name:'浦江县',parent:22228,id:22228-8,},{name:'磐安县',parent:22228,id:22228-9,},{name:'安文镇',parent:22228,id:22228-10,},


	{name:'台州市',parent:22,id:22229,}, 
	{name:'椒江区',parent:22229,id:22229-1,},{name:'黄岩区',parent:22229,id:22229-2,},{name:'路桥区',parent:22229,id:22229-3,},{name:'临海市',parent:22229,id:22229-4,},{name:'温岭市',parent:22229,id:22229-5,},{name:'三门县',parent:22229,id:22229-6,},{name:'海游镇',parent:22229,id:22229-7,},{name:'天台县',parent:22229,id:22229-8,},{name:'仙居县',parent:22229,id:22229-9,},{name:'玉环县',parent:22229,id:22229-10,},{name:'珠港镇',parent:22229,id:22229-11,},

	{name:'温州市',parent:22,id:222210,}, 
	{name:'鹿城区',parent:222210,id:222210-1,},{name:'龙湾区',parent:222210,id:222210-2,},{name:'瓯海区',parent:222210,id:222210-3,},{name:'瑞安市',parent:222210,id:222210-4,},{name:'乐清市',parent:222210,id:222210-5,},{name:'永嘉县',parent:222210,id:222210-6,},{name:'上塘镇',parent:222210,id:222210-7,},{name:'文成县',parent:222210,id:222210-8,},{name:'大峃镇',parent:222210,id:222210-9,},{name:'平阳县',parent:222210,id:222210-10,},{name:'昆阳镇',parent:222210,id:222210-11,},{name:'泰顺县',parent:222210,id:222210-12,},{name:'罗阳镇',parent:222210,id:222210-13,},{name:'洞头县',parent:222210,id:222210-14,},{name:'北岙镇',parent:222210,id:222210-15,},{name:'苍南县',parent:222210,id:222210-16,},{name:'灵溪镇',parent:222210,id:222210-17,},


	{name:'丽水市',parent:22,id:222211,}, 

	{name:'莲都区',parent:222211,id:222211-1,},{name:'龙泉市',parent:222211,id:222211-2,},{name:'缙云县',parent:222211,id:222211-3,},{name:'五云镇',parent:222211,id:222211-4,},{name:'青田县',parent:222211,id:222211-5,},{name:'鹤城镇',parent:222211,id:222211-6,},{name:'云和县',parent:222211,id:222211-7,},{name:'云和镇',parent:222211,id:222211-8,},{name:'遂昌县',parent:222211,id:222211-9,},{name:'妙高镇',parent:222211,id:222211-10,},{name:'松阳县',parent:222211,id:222211-11,},{name:'西屏镇',parent:222211,id:222211-12,},{name:'庆元县',parent:222211,id:222211-13,},{name:'松源镇',parent:222211,id:222211-14,},{name:'景宁畲族自治县',parent:222211,id:222211-15,},{name:'鹤溪镇',parent:222211,id:222211-16,},


	{name:'南京市',parent:21,id:21211,}, 
	{name:'玄武区',parent:21211,id:21211-1,},{name:'白下区',parent:21211,id:21211-2,},{name:'秦淮区',parent:21211,id:21211-3,},{name:'建邺区',parent:21211,id:21211-4,},{name:'鼓楼区',parent:21211,id:21211-5,},{name:'下关区',parent:21211,id:21211-6,},{name:'浦口区',parent:21211,id:21211-7,},{name:'六合区',parent:21211,id:21211-8,},{name:'栖霞区',parent:21211,id:21211-9,},{name:'雨花台区',parent:21211,id:21211-10,},{name:'江宁区',parent:21211,id:21211-11,},{name:'溧水县',parent:21211,id:21211-12,},{name:'永阳镇',parent:21211,id:21211-13,},{name:'高淳县',parent:21211,id:21211-14,},{name:'淳溪镇',parent:21211,id:21211-15,},

	{name:'徐州市',parent:21,id:21212,}, 
	{name:'云龙区',parent:21212,id:21212-1,},{name:'鼓楼区',parent:21212,id:21212-2,},{name:'九里区',parent:21212,id:21212-3,},{name:'贾汪区',parent:21212,id:21212-4,},{name:'泉山区',parent:21212,id:21212-5,},{name:'邳州市',parent:21212,id:21212-6,},{name:'新沂市',parent:21212,id:21212-7,},{name:'铜山县',parent:21212,id:21212-8,},{name:'铜山镇',parent:21212,id:21212-9,},{name:'睢宁县',parent:21212,id:21212-10,},{name:'睢城镇',parent:21212,id:21212-11,},{name:'沛县',parent:21212,id:21212-12,},{name:'沛城镇',parent:21212,id:21212-13,},{name:'丰县',parent:21212,id:21212-14,},{name:'凤城镇',parent:21212,id:21212-15,},

	{name:'连云港市',parent:21,id:21213,}, 

	{name:'新浦区',parent:21213,id:21213-1,},{name:'连云区',parent:21213,id:21213-2,},{name:'海州区',parent:21213,id:21213-3,},{name:'赣榆县',parent:21213,id:21213-4,},{name:'青口镇',parent:21213,id:21213-5,},{name:'灌云县',parent:21213,id:21213-6,},{name:'伊山镇',parent:21213,id:21213-7,},{name:'东海县',parent:21213,id:21213-8,},{name:'牛山镇',parent:21213,id:21213-9,},{name:'灌南县',parent:21213,id:21213-10,},{name:'新安镇',parent:21213,id:21213-11,},


	{name:'宿迁市',parent:21,id:21214,}, 
	{name:'宿城区',parent:21214,id:21214-1,},{name:'宿豫区',parent:21214,id:21214-2,},{name:'沭阳县',parent:21214,id:21214-3,},{name:'沭城镇',parent:21214,id:21214-4,},{name:'泗阳县',parent:21214,id:21214-5,},{name:'众兴镇',parent:21214,id:21214-6,},{name:'泗洪县',parent:21214,id:21214-7,},{name:'青阳镇',parent:21214,id:21214-8,},



	{name:'淮安市',parent:21,id:21215,}, 
	{name:'清河区',parent:21215,id:21215-1,},{name:'清浦区',parent:21215,id:21215-2,},{name:'楚州区',parent:21215,id:21215-3,},{name:'淮阴区',parent:21215,id:21215-4,},{name:'金湖县',parent:21215,id:21215-5,},{name:'黎城镇',parent:21215,id:21215-6,},{name:'盱眙县',parent:21215,id:21215-7,},{name:'盱城镇',parent:21215,id:21215-8,},{name:'洪泽县',parent:21215,id:21215-9,},{name:'高良涧镇',parent:21215,id:21215-10,},{name:'涟水县',parent:21215,id:21215-11,},{name:'涟城镇',parent:21215,id:21215-12,},


	{name:'盐城市',parent:21,id:21216,}, 
	{name:'亭湖区',parent:21216,id:21216-1,},{name:'盐都区',parent:21216,id:21216-2,},{name:'东台市',parent:21216,id:21216-3,},{name:'大丰市',parent:21216,id:21216-4,},{name:'射阳县',parent:21216,id:21216-5,},{name:'合德镇',parent:21216,id:21216-6,},{name:'阜宁县',parent:21216,id:21216-7,},{name:'阜城镇',parent:21216,id:21216-8,},{name:'滨海县',parent:21216,id:21216-9,},{name:'东坎镇',parent:21216,id:21216-10,},{name:'响水县',parent:21216,id:21216-11,},{name:'响水镇',parent:21216,id:21216-12,},{name:'建湖县',parent:21216,id:21216-13,},{name:'近湖镇',parent:21216,id:21216-14,},

	{name:'扬州市',parent:21,id:21218,}, 
	{name:'维扬区',parent:21217,id:21217-1,},{name:'广陵区',parent:21217,id:21217-2,},{name:'邗江区',parent:21217,id:21217-3,},{name:'仪征市',parent:21217,id:21217-4,},{name:'江都市',parent:21217,id:21217-5,},{name:'高邮市',parent:21217,id:21217-6,},{name:'宝应县',parent:21217,id:21217-7,},{name:'安宜镇',parent:21217,id:21217-8,},


	{name:'泰州市',parent:21,id:21218,}, 

	{name:'海陵区',parent:21218,id:21218-1,},{name:'高港区',parent:21218,id:21218-2,},{name:'靖江市',parent:21218,id:21218-3,},{name:'泰兴市',parent:21218,id:21218-4,},{name:'姜堰市',parent:21218,id:21218-5,},{name:'兴化市',parent:21218,id:21218-6,},

	{name:'南通市',parent:21,id:21219,}, 

	{name:'崇川区',parent:21219,id:21219-1,},{name:'港闸区',parent:21219,id:21219-2,},{name:'海门市',parent:21219,id:21219-3,},{name:'启东市',parent:21219,id:21219-4,},{name:'通州市',parent:21219,id:21219-5,},{name:'如皋市',parent:21219,id:21219-6,},{name:'如东县',parent:21219,id:21219-7,},{name:'掘港镇',parent:21219,id:21219-8,},{name:'海安县',parent:21219,id:21219-9,},{name:'海安镇',parent:21219,id:21219-10,},

	{name:'镇江市',parent:21,id:212110,}, 

	{name:'京口区',parent:212110,id:212110-1,},{name:'润州区',parent:212110,id:212110-2,},{name:'丹徒区',parent:212110,id:212110-3,},{name:'扬中市',parent:212110,id:212110-4,},{name:'丹阳市',parent:212110,id:212110-5,},{name:'句容市',parent:212110,id:212110-6,},


	{name:'常州市',parent:21,id:212111,}, 
	{name:'钟楼区',parent:212111,id:212111-1,},{name:'天宁区',parent:212111,id:212111-2,},{name:'戚墅堰区',parent:212111,id:212111-3,},{name:'新北区',parent:212111,id:212111-4,},{name:'武进区',parent:212111,id:212111-5,},{name:'金坛市',parent:212111,id:212111-6,},{name:'溧阳市',parent:212111,id:212111-7,},

	{name:'无锡市',parent:21,id:212112,}, 
	{name:'崇安区',parent:212112,id:212112-1,},{name:'南长区',parent:212112,id:212112-2,},{name:'北塘区',parent:212112,id:212112-3,},{name:'滨湖区',parent:212112,id:212112-4,},{name:'惠山区',parent:212112,id:212112-5,},{name:'锡山区',parent:212112,id:212112-6,},{name:'江阴市',parent:212112,id:212112-7,},{name:'宜兴市',parent:212112,id:212112-8,},

	{name:'苏州市',parent:21,id:212113,},

	{name:'金阊区',parent:212113,id:212113-1,},{name:'沧浪区',parent:212113,id:212113-2,},{name:'平江区',parent:212113,id:212113-3,},{name:'虎丘区',parent:212113,id:212113-4,},{name:'吴中区',parent:212113,id:212113-5,},{name:'相城区',parent:212113,id:212113-6,},{name:'吴江市',parent:212113,id:212113-7,},{name:'昆山市',parent:212113,id:212113-8,},{name:'太仓市',parent:212113,id:212113-9,},{name:'常熟市',parent:212113,id:212113-10,},{name:'张家港市',parent:212113,id:212113-11,},

	{name:'合肥市',parent:20,id:20201,}, 
	{name:'庐阳区',parent:20201,id:20201-1,},{name:'瑶海区',parent:20201,id:20201-2,},{name:'蜀山区',parent:20201,id:20201-3,},{name:'包河区',parent:20201,id:20201-4,},{name:'长丰县',parent:20201,id:20201-5,},{name:'水湖镇',parent:20201,id:20201-6,},{name:'肥东县',parent:20201,id:20201-7,},{name:'店埠镇',parent:20201,id:20201-8,},{name:'肥西县',parent:20201,id:20201-9,},{name:'上派镇',parent:20201,id:20201-10,},


	{name:'宿州市',parent:20,id:20202,}, 
	{name:'埇桥区',parent:20202,id:20202-1,},{name:'砀山县',parent:20202,id:20202-2,},{name:'砀城镇',parent:20202,id:20202-3,},{name:'萧县',parent:20202,id:20202-4,},{name:'长丰县',parent:20202,id:20202-5,},{name:'灵璧县',parent:20202,id:20202-6,},{name:'灵城镇',parent:20202,id:20202-7,},{name:'泗县',parent:20202,id:20202-8,},{name:'泗城镇',parent:20202,id:20202-9,},

	{name:'淮北市',parent:20,id:20203,}, 
	{name:'相山区',parent:20203,id:20203-1,},{name:'杜集区',parent:20203,id:20203-2,},{name:'烈山区',parent:20203,id:20203-3,},{name:'濉溪县',parent:20203,id:20203-4,},{name:'濉溪镇',parent:20203,id:20203-5,},


	{name:'亳州市',parent:20,id:20204,}, 
	{name:'谯城区',parent:20204,id:20204-1,},{name:'涡阳县',parent:20204,id:20204-2,},{name:'城关镇',parent:20204,id:20204-3,},{name:'蒙城县',parent:20204,id:20204-4,},{name:'利辛县',parent:20204,id:20204-5,},



	{name:'阜阳市',parent:20,id:20205,}, 
	{name:'颍州区',parent:20205,id:20205-1,},{name:'颍东区',parent:20205,id:20205-2,},{name:'颍泉区',parent:20205,id:20205-3,},{name:'界首市',parent:20205,id:20205-4,},{name:'临泉县',parent:20205,id:20205-5,},{name:'城关镇',parent:20205,id:20205-6,},{name:'太和县',parent:20205,id:20205-7,},{name:'城关镇',parent:20205,id:20205-8,},{name:'阜南县',parent:20205,id:20205-9,},{name:'颍上县',parent:20205,id:20205-10,},{name:'慎城镇',parent:20205,id:20205-11,},

	{name:'蚌埠市',parent:20,id:20206,}, 
	{name:'蚌山区',parent:20206,id:20206-1,},{name:'龙子湖区',parent:20206,id:20206-2,},{name:'禹会区',parent:20206,id:20206-3,},{name:'淮上区',parent:20206,id:20206-4,},{name:'怀远县',parent:20206,id:20206-5,},{name:'城关镇',parent:20206,id:20206-6,},{name:'五河县',parent:20206,id:20206-7,},{name:'固镇县',parent:20206,id:20206-8,},


	{name:'淮南市',parent:20,id:20207,}, 

	{name:'田家庵区',parent:20207,id:20207-1,},{name:'大通区',parent:20207,id:20207-2,},{name:'谢家集区',parent:20207,id:20207-3,},{name:'八公山区',parent:20207,id:20207-4,},{name:'潘集区',parent:20207,id:20207-5,},{name:'凤台县',parent:20207,id:20207-6,},{name:'城关镇',parent:20207,id:20207-7,},

	{name:'滁州市',parent:20,id:20208,}, 
	{name:'琅琊区',parent:20208,id:20208-1,},{name:'南谯区',parent:20208,id:20208-2,},{name:'明光市',parent:20208,id:20208-3,},{name:'天长市',parent:20208,id:20208-4,},{name:'来安县',parent:20208,id:20208-5,},{name:'新安镇',parent:20208,id:20208-6,},{name:'全椒县',parent:20208,id:20208-7,},{name:'襄河镇',parent:20208,id:20208-8,},{name:'定远县',parent:20208,id:20208-9,},{name:'定城镇',parent:20208,id:20208-10,},{name:'凤阳县',parent:20208,id:20208-11,},{name:'府城镇',parent:20208,id:20208-12,},

	{name:'马鞍山市',parent:20,id:20209,}, 
	{name:'雨山区',parent:20209,id:20209-1,},{name:'花山区',parent:20209,id:20209-2,},{name:'金家庄区',parent:20209,id:20209-3,},{name:'当涂县',parent:20209,id:20209-4,},{name:'姑孰镇',parent:20209,id:20209-5,},


	{name:'芜湖市',parent:20,id:202010,}, 
	{name:'镜湖区',parent:202010,id:202010-1,},{name:'弋江区',parent:202010,id:202010-2,},{name:'三山区',parent:202010,id:202010-3,},{name:'鸠江区',parent:202010,id:202010-4,},{name:'芜湖县',parent:202010,id:202010-5,},{name:'湾镇',parent:202010,id:202010-6,},{name:'繁昌县',parent:202010,id:202010-7,},{name:'繁阳镇',parent:202010,id:202010-8,},{name:'南陵县',parent:202010,id:202010-9,},{name:'籍山镇',parent:202010,id:202010-10,},

	{name:'铜陵市',parent:20,id:202011,}, 
	{name:'铜官山区',parent:202011,id:202011-1,},{name:'弋江区',parent:202011,id:202011-2,},{name:'郊区',parent:202011,id:202011-3,},{name:'铜陵县',parent:202011,id:202011-4,},{name:'五松镇',parent:202011,id:202011-5,},

	{name:'安庆市',parent:20,id:202012,}, 
	{name:'迎江区',parent:202012,id:202012-1,},{name:'大观区',parent:202012,id:202012-2,},{name:'宜秀区',parent:202012,id:202012-3,},{name:'桐城市',parent:202012,id:202012-4,},{name:'怀宁县',parent:202012,id:202012-5,},{name:'高河镇',parent:202012,id:202012-6,},{name:'枞阳县',parent:202012,id:202012-7,},{name:'枞阳镇',parent:202012,id:202012-8,},{name:'潜山县',parent:202012,id:202012-9,},{name:'梅城镇',parent:202012,id:202012-10,},{name:'太湖县',parent:202012,id:202012-11,},{name:'晋熙镇',parent:202012,id:202012-12,},{name:'宿松县',parent:202012,id:202012-13,},{name:'孚玉镇',parent:202012,id:202012-14,},{name:'望江县',parent:202012,id:202012-15,},{name:'雷阳镇',parent:202012,id:202012-16,},{name:'岳西县',parent:202012,id:202012-17,},{name:'天堂镇',parent:202012,id:202012-18,},

	{name:'黄山市',parent:20,id:202013,}, 
	{name:'屯溪区',parent:202013,id:202013-1,},{name:'黄山区',parent:202013,id:202013-2,},{name:'徽州区',parent:202013,id:202013-3,},{name:'歙县',parent:202013,id:202013-4,},{name:'徽城镇',parent:202013,id:202013-5,},{name:'休宁县',parent:202013,id:202013-6,},{name:'海阳镇',parent:202013,id:202013-7,},{name:'黟县',parent:202013,id:202013-8,},{name:'碧阳镇',parent:202013,id:202013-9,},{name:'祁门县',parent:202013,id:202013-10,},{name:'祁山镇',parent:202013,id:202013-11,},

	{name:'六安市',parent:20,id:202014,}, 

	{name:'金安区',parent:202014,id:202014-1,},{name:'裕安区',parent:202014,id:202014-2,},{name:'寿县',parent:202014,id:202014-3,},{name:'寿春镇',parent:202014,id:202014-4,},{name:'霍邱县',parent:202014,id:202014-5,},{name:'城关镇',parent:202014,id:202014-6,},{name:'舒城县',parent:202014,id:202014-7,},{name:'城关镇',parent:202014,id:202014-8,},{name:'金寨县',parent:202014,id:202014-9,},{name:'梅山镇',parent:202014,id:202014-10,},{name:'霍山县',parent:202014,id:202014-11,},{name:'衡山镇',parent:202014,id:202014-12,},

	{name:'巢湖市',parent:20,id:202015,}, 
	{name:'居巢区',parent:202015,id:202015-1,},{name:'庐江县',parent:202015,id:202015-2,},{name:'庐城镇',parent:202015,id:202015-3,},{name:'无为县',parent:202015,id:202015-4,},{name:'无城镇',parent:202015,id:202015-5,},{name:'含山县',parent:202015,id:202015-6,},{name:'环峰镇',parent:202015,id:202015-7,},{name:'和县',parent:202015,id:202015-8,},{name:'历阳镇',parent:202015,id:202015-9,},

	{name:'池州市',parent:20,id:202016,}, 
	{name:'贵池区',parent:202016,id:202016-1,},{name:'东至县',parent:202016,id:202016-2,},{name:'尧渡镇',parent:202016,id:202016-3,},{name:'石台县',parent:202016,id:202016-4,},{name:'七里镇',parent:202016,id:202016-5,},{name:'青阳县',parent:202016,id:202016-6,},{name:'蓉城镇',parent:202016,id:202016-7,},

	{name:'宣城市',parent:20,id:202017,},
	{name:'宣州区',parent:202017,id:202017-1,},{name:'宁国市',parent:202017,id:202017-2,},{name:'郎溪县',parent:202017,id:202017-3,},{name:'建平镇',parent:202017,id:202017-4,},{name:'广德县',parent:202017,id:202017-5,},{name:'桃州镇',parent:202017,id:202017-6,},{name:'泾县',parent:202017,id:202017-7,},{name:'泾川镇',parent:202017,id:202017-8,},{name:'旌德县',parent:202017,id:202017-9,},{name:'旌阳镇',parent:202017,id:202017-10,},{name:'绩溪县',parent:202017,id:202017-11,},{name:'华阳镇',parent:202017,id:202017-12,},


	{name:'长沙市',parent:19,id:19191,}, 
	{name:'张家界市',parent:19,id:19192,}, 
	{name:'常德市',parent:19,id:19193,}, 
	{name:'益阳市',parent:19,id:19194,}, 
	{name:'岳阳市',parent:19,id:19195,}, 
	{name:'株洲市',parent:19,id:19196,}, 
	{name:'湘潭市',parent:19,id:19197,}, 
	{name:'衡阳市',parent:19,id:19198,}, 
	{name:'郴州市',parent:19,id:19199,}, 
	{name:'永州市',parent:19,id:191910,}, 
	{name:'邵阳市',parent:19,id:191911,}, 
	{name:'怀化市',parent:19,id:191912,}, 
	{name:'娄底市',parent:19,id:191913,}, 
	{name:'湘西州',parent:19,id:191914,}, 

	{name:'武汉市',parent:18,id:18181,}, 
	{name:'十堰市',parent:18,id:18182,}, 
	{name:'襄樊市',parent:18,id:18183,}, 
	{name:'荆门市',parent:18,id:18184,}, 
	{name:'孝感市',parent:18,id:18185,}, 
	{name:'黄冈市',parent:18,id:18186,}, 
	{name:'鄂州市',parent:18,id:18187,}, 
	{name:'黄石市',parent:18,id:18188,}, 
	{name:'宜昌市',parent:18,id:18189,}, 
	{name:'荆州市',parent:18,id:181810,}, 
	{name:'随州市',parent:18,id:181811,}, 
	{name:'省直辖县级行政单位',parent:18,id:181812,}, 
	{name:'恩施州',parent:18,id:181813,}, 

	{name:'太原市',parent:17,id:17171,}, 
	{name:'朔州市',parent:17,id:17172,}, 
	{name:'大同市',parent:17,id:17173,}, 
	{name:'阳泉市',parent:17,id:17174,}, 
	{name:'长治市',parent:17,id:17175,}, 
	{name:'晋城市',parent:17,id:17176,}, 
	{name:'忻州市',parent:17,id:17177,}, 
	{name:'晋中市',parent:17,id:17178,}, 
	{name:'临汾市',parent:17,id:17179,}, 
	{name:'吕梁市',parent:17,id:171710,}, 
	{name:'运城市',parent:17,id:171711,}, 

	{name:'济南市',parent:16,id:16161,}, 
	{name:'青岛市',parent:16,id:16162,}, 
	{name:'聊城市',parent:16,id:16163,}, 
	{name:'德州市',parent:16,id:16164,}, 
	{name:'东营市',parent:16,id:16165,}, 
	{name:'淄博市',parent:16,id:16166,}, 
	{name:'潍坊市',parent:16,id:16167,}, 
	{name:'烟台市',parent:16,id:16168,}, 
	{name:'威海市',parent:16,id:16169,}, 
	{name:'日照市',parent:16,id:161610,}, 
	{name:'临沂市',parent:16,id:161611,}, 
	{name:'枣庄市',parent:16,id:161612,}, 
	{name:'济宁市',parent:16,id:161613,}, 
	{name:'泰安市',parent:16,id:161614,}, 
	{name:'莱芜市',parent:16,id:161615,}, 
	{name:'滨州市',parent:16,id:161616,}, 
	{name:'菏泽市',parent:16,id:161617,},

	{name:'郑州市',parent:15,id:15151,}, 
	{name:'开封市',parent:15,id:15152,}, 
	{name:'三门峡市',parent:15,id:15153,}, 
	{name:'洛阳市',parent:15,id:15154,}, 
	{name:'焦作市',parent:15,id:15155,}, 
	{name:'新乡市',parent:15,id:15156,}, 
	{name:'鹤壁市',parent:15,id:15157,}, 
	{name:'安阳市',parent:15,id:15158,}, 
	{name:'濮阳市',parent:15,id:15159,}, 
	{name:'商丘市',parent:15,id:151510,}, 
	{name:'许昌市',parent:15,id:151511,}, 
	{name:'漯河市',parent:15,id:151512,}, 
	{name:'平顶山市',parent:15,id:151513,}, 
	{name:'南阳市',parent:15,id:151514,}, 
	{name:'信阳市',parent:15,id:151515,}, 
	{name:'周口市',parent:15,id:151516,}, 
	{name:'驻马店市',parent:15,id:151517,},
	{name:'济源市',parent:15,id:151518,},



	{name:'西安市',parent:13,id:13131,}, 
	{name:'延安市',parent:13,id:13132,}, 
	{name:'铜川市',parent:13,id:13133,}, 
	{name:'渭南市',parent:13,id:13134,}, 
	{name:'咸阳市',parent:13,id:13135,}, 
	{name:'宝鸡市',parent:13,id:13136,}, 
	{name:'汉中市',parent:13,id:13137,}, 
	{name:'榆林市',parent:13,id:13138,}, 
	{name:'安康市',parent:13,id:13139,}, 
	{name:'商洛市',parent:13,id:131310,}, 

	{name:'兰州市',parent:12,id:12121,}, 
	{name:'嘉峪关市',parent:12,id:12122,}, 
	{name:'白银市',parent:12,id:12123,}, 
	{name:'天水市',parent:12,id:12124,}, 
	{name:'武威市',parent:12,id:12125,}, 
	{name:'酒泉市',parent:12,id:12126,}, 
	{name:'张掖市',parent:12,id:12127,}, 
	{name:'庆阳市',parent:12,id:12128,}, 
	{name:'平凉市',parent:12,id:12129,}, 
	{name:'定西市',parent:12,id:121210,}, 
	{name:'陇南市',parent:12,id:121211,}, 
	{name:'临夏州',parent:12,id:121212,}, 
	{name:'甘南州',parent:12,id:121213,}, 

	{name:'西宁市',parent:11,id:11111,}, 
	{name:'海东地区',parent:11,id:11112,}, 
	{name:'海北州',parent:11,id:11113,}, 
	{name:'海南州',parent:11,id:11114,}, 
	{name:'黄南州',parent:11,id:11115,}, 
	{name:'果洛州',parent:11,id:11116,}, 
	{name:'玉树州',parent:11,id:11117,}, 
	{name:'海西州',parent:11,id:11118,}, 

	{name:'乌鲁木齐市',parent:10,id:10101,}, 
	{name:'克拉玛依市',parent:10,id:10102,}, 
	{name:'自治区直辖县级行政单位',parent:10,id:10103,}, 
	{name:'喀什地区',parent:10,id:10104,}, 
	{name:'阿克苏地区',parent:10,id:10105,}, 
	{name:'和田地区',parent:10,id:10106,}, 
	{name:'吐鲁番地区',parent:10,id:10107,}, 
	{name:'哈密地区',parent:10,id:10108,}, 
	{name:'克孜勒苏柯州',parent:10,id:10109,}, 
	{name:'博尔塔拉州',parent:10,id:101010,}, 
	{name:'昌吉州',parent:10,id:101011,}, 
	{name:'巴音郭楞州',parent:10,id:101012,}, 
	{name:'伊犁州',parent:10,id:101013,}, 
	{name:'塔城地区',parent:10,id:101014,}, 
	{name:'阿勒泰地区',parent:10,id:101015,}, 


	{name:'银川市',parent:9,id:991,}, 
	{name:'石嘴山市',parent:9,id:992,}, 
	{name:'吴忠市',parent:9,id:993,}, 
	{name:'固原市',parent:9,id:994,}, 
	{name:'中卫市',parent:9,id:995,}, 



	{name:'呼和浩特市',parent:8,id:881,}, 
	{name:'包头市',parent:8,id:882,}, 
	{name:'乌海市',parent:8,id:883,}, 
	{name:'赤峰市',parent:8,id:884,}, 
	{name:'通辽市',parent:8,id:885,}, 
	{name:'呼伦贝尔市',parent:8,id:886,}, 
	{name:'鄂尔多斯市',parent:8,id:887,}, 
	{name:'乌兰察布市',parent:8,id:888,}, 
	{name:'巴彦淖尔市',parent:8,id:889,}, 
	{name:'兴安盟',parent:8,id:8810,}, 
	{name:'锡林郭勒盟',parent:8,id:8811,}, 
	{name:'阿拉善盟',parent:8,id:8812,}, 

	{name:'沈阳市',parent:7,id:771,}, 
	{name:'朝阳市',parent:7,id:772,}, 
	{name:'阜新市',parent:7,id:773,}, 
	{name:'铁岭市',parent:7,id:774,}, 
	{name:'抚顺市',parent:7,id:775,}, 
	{name:'本溪市',parent:7,id:776,}, 
	{name:'辽阳市',parent:7,id:777,}, 
	{name:'鞍山市',parent:7,id:778,}, 
	{name:'丹东市',parent:7,id:779,}, 
	{name:'大连市',parent:7,id:7710,}, 
	{name:'营口市',parent:7,id:7711,}, 
	{name:'盘锦市',parent:7,id:7712,}, 
	{name:'锦州市',parent:7,id:7713,}, 
	{name:'葫芦岛市',parent:7,id:7714,}, 



	{name:'长春市',parent:6,id:661,}, 

	{name:'朝阳区',parent:661,id:661-1,},{name:'南关区',parent:661,id:661-2,},{name:'宽城区',parent:661,id:661-3,},{name:'二道区',parent:661,id:661-4,},{name:'绿园区',parent:661,id:661-5,},{name:'双阳区',parent:661,id:661-6,},{name:'德惠市',parent:661,id:661-7,},{name:'九台市',parent:661,id:661-8,},{name:'榆树市',parent:661,id:661-9,},{name:'农安县',parent:661,id:661-10,},{name:'农安镇',parent:661,id:661-11,},

	{name:'白城市',parent:6,id:662,}, 
	{name:'洮北区',parent:662,id:662-1,},{name:'大安市',parent:662,id:662-2,},{name:'洮南市',parent:662,id:662-3,},{name:'镇赉县',parent:662,id:662-4,},{name:'镇赉镇',parent:662,id:662-5,},{name:'通榆县',parent:662,id:662-6,},{name:'开通镇',parent:662,id:662-7,},

	{name:'松原市',parent:6,id:663,}, 
	{name:'宁江区',parent:663,id:663-1,},{name:'扶余县',parent:663,id:663-2,},{name:'三岔河镇',parent:663,id:663-3,},{name:'长岭县',parent:663,id:663-4,},{name:'长岭镇',parent:663,id:663-5,},{name:'乾安县',parent:663,id:663-6,},{name:'乾安镇',parent:663,id:663-7,},{name:'前郭尔罗斯蒙古族自治县',parent:663,id:663-8,},{name:'前郭镇',parent:663,id:663-9,},


	{name:'吉林市',parent:6,id:664,}, 
	{name:'四平市',parent:6,id:665,}, 
	{name:'辽源市',parent:6,id:666,}, 

	{name:'龙山区',parent:666,id:666-1,},{name:'西安区',parent:666,id:666-2,},{name:'东丰县',parent:666,id:666-3,},{name:'东丰镇',parent:666,id:666-4,},{name:'东辽县',parent:666,id:666-5,},{name:'白泉镇',parent:666,id:666-6,},


	{name:'通化市',parent:6,id:667,}, 

	{name:'东昌区',parent:667,id:667-1,},{name:'二道江区',parent:667,id:667-2,},{name:'梅河口市',parent:667,id:667-3,},{name:'集安市',parent:667,id:667-4,},{name:'通化县',parent:667,id:667-5,},{name:'快大茂镇',parent:667,id:667-6,},{name:'辉南县',parent:667,id:667-7,},{name:'朝阳镇',parent:667,id:667-8,},{name:'柳河县',parent:667,id:667-9,},{name:'柳河镇',parent:667,id:667-10,},


	{name:'白山市',parent:6,id:668,}, 

	{name:'八道江区',parent:668,id:668-1,},{name:'临江市',parent:668,id:668-2,},{name:'江源县',parent:668,id:668-3,},{name:'孙家堡子镇',parent:668,id:668-4,},{name:'抚松县',parent:668,id:668-5,},{name:'抚松镇',parent:668,id:668-6,},{name:'靖宇县',parent:668,id:668-7,},{name:'靖宇镇',parent:668,id:668-8,},{name:'长白朝鲜族自治县',parent:668,id:668-9,},{name:'长白镇',parent:668,id:668-10,},


	{name:'延边州',parent:6,id:669,}, 
	{name:'延吉市',parent:669,id:669-1,},{name:'图们市',parent:669,id:669-2,},{name:'敦化市',parent:669,id:669-3,},{name:'珲春市',parent:669,id:669-4,},{name:'龙井市',parent:669,id:669-5,},{name:'和龙市',parent:669,id:669-6,},{name:'汪清县',parent:669,id:669-7,},{name:'汪清镇',parent:669,id:669-8,},{name:'安图县',parent:669,id:669-9,},{name:'明月镇',parent:669,id:669-10,},

	{name:'哈尔滨市',parent:5,id:551,},
	{name:'松北区',parent:551,id:551-1,},{name:'道里区',parent:551,id:551-2,},{name:'南岗区',parent:551,id:551-3,},{name:'道外区',parent:551,id:551-4,},{name:'香坊区',parent:551,id:551-5,},{name:'动力区',parent:551,id:551-6,},{name:'平房区',parent:551,id:551-7,},{name:'呼兰区',parent:551,id:551-8,},{name:'双城市',parent:551,id:551-9,},{name:'尚志市',parent:551,id:551-10,},{name:'五常市',parent:551,id:551-11,},{name:'阿城市',parent:551,id:551-12,},{name:'依兰县',parent:551,id:551-13,},{name:'依兰镇',parent:551,id:551-14,},{name:'方正县',parent:551,id:551-15,},{name:'方正镇',parent:551,id:551-16,},{name:'宾县',parent:551,id:551-17,},{name:'宾州镇',parent:551,id:551-18,},{name:'巴彦县',parent:551,id:551-19,},{name:'巴彦镇',parent:551,id:551-20,},{name:'木兰县',parent:551,id:551-21,},{name:'木兰镇',parent:551,id:551-22,},{name:'通河县',parent:551,id:551-23,},{name:'通河镇',parent:551,id:551-24,},{name:'延寿县',parent:551,id:551-25,},{name:'延寿镇',parent:551,id:551-26,},

	{name:'齐齐哈尔市',parent:5,id:552,},
	{name:'建华区',parent:552,id:552-1,},{name:'龙沙区',parent:552,id:552-2,},{name:'铁锋区',parent:552,id:552-3,},{name:'昂昂溪区',parent:552,id:552-4,},{name:'富拉尔基区',parent:552,id:552-5,},{name:'碾子山区',parent:552,id:552-6,},{name:'梅里斯达斡尔族区',parent:552,id:552-7,},{name:'讷河市',parent:552,id:552-8,},{name:'龙江县',parent:552,id:552-9,},{name:'龙江镇',parent:552,id:552-10,},{name:'依安县',parent:552,id:552-11,},{name:'依安镇',parent:552,id:552-12,},{name:'泰来县',parent:552,id:552-13,},{name:'泰来镇',parent:552,id:552-14,},{name:'甘南县',parent:552,id:552-15,},{name:'甘南镇',parent:552,id:552-16,},{name:'富裕县',parent:552,id:552-17,},{name:'富裕镇',parent:552,id:552-18,},{name:'克山县',parent:552,id:552-19,},{name:'克山镇',parent:552,id:552-20,},{name:'克东县',parent:552,id:552-21,},{name:'克东镇',parent:552,id:552-22,},{name:'拜泉县',parent:552,id:552-23,},{name:'拜泉镇',parent:552,id:552-24,},

	{name:'七台河市',parent:5,id:553,}, 
	{name:'桃山区',parent:553,id:553-1,},{name:'新兴区',parent:553,id:553-2,},{name:'茄子河区',parent:553,id:553-3,},{name:'勃利县',parent:553,id:553-4,},{name:'勃利镇',parent:553,id:553-5,},

	{name:'黑河市',parent:5,id:554,}, 
	{name:'爱辉区',parent:554,id:554-1,},{name:'北安市',parent:554,id:554-2,},{name:'五大连池市',parent:554,id:554-3,},{name:'嫩江县',parent:554,id:554-4,},{name:'嫩江镇',parent:554,id:554-5,},{name:'逊克县',parent:554,id:554-6,},{name:'边疆镇',parent:554,id:554-7,},{name:'孙吴县',parent:554,id:554-8,},{name:'孙吴镇',parent:554,id:554-9,},


	{name:'大庆市',parent:5,id:555,}, 
	{name:'萨尔图区',parent:555,id:555-1,},{name:'龙凤区',parent:555,id:555-2,},{name:'让胡路区',parent:555,id:555-3,},{name:'大同区',parent:555,id:555-4,},{name:'红岗区',parent:555,id:555-5,},{name:'肇州县',parent:555,id:555-6,},{name:'肇州镇',parent:555,id:555-7,},{name:'肇源县',parent:555,id:555-8,},{name:'肇源镇',parent:555,id:555-9,},{name:'林甸县',parent:555,id:555-10,},{name:'林甸镇',parent:555,id:555-11,},{name:'杜尔伯特蒙古族自治县',parent:555,id:555-12,},{name:'泰康镇',parent:555,id:555-13,},

	{name:'鹤岗市',parent:5,id:556,}, 
	{name:'兴山区',parent:556,id:556-1,},{name:'向阳区',parent:556,id:556-2,},{name:'工农区',parent:556,id:556-3,},{name:'南山区',parent:556,id:556-4,},{name:'兴安区',parent:556,id:556-5,},{name:'东山区',parent:556,id:556-6,},{name:'萝北县',parent:556,id:556-7,},{name:'凤翔镇',parent:556,id:556-8,},{name:'绥滨县',parent:556,id:556-9,},{name:'绥滨镇',parent:556,id:556-10,},

	{name:'伊春市',parent:5,id:557,},
	{name:'伊春区',parent:557,id:557-1,},{name:'南岔区',parent:557,id:557-2,},{name:'友好区',parent:557,id:557-3,},{name:'西林区',parent:557,id:557-4,},{name:'翠峦区',parent:557,id:557-5,},{name:'新青区',parent:557,id:557-6,},{name:'美溪区',parent:557,id:557-7,},{name:'金山屯区',parent:557,id:557-8,},{name:'五营区',parent:557,id:557-9,},{name:'乌马河区',parent:557,id:557-10,},{name:'汤旺河区',parent:557,id:557-11,},{name:'带岭区',parent:557,id:557-12,},{name:'乌伊岭区',parent:557,id:557-13,},{name:'红星区',parent:557,id:557-14,},{name:'上甘岭区',parent:557,id:557-15,},{name:'铁力市',parent:557,id:557-16,},{name:'嘉荫县',parent:557,id:557-17,},{name:'朝阳镇',parent:557,id:557-18,},


	{name:'佳木斯市',parent:5,id:558,}, 
	{name:'前进区',parent:558,id:558-1,},{name:'永红区',parent:558,id:558-2,},{name:'向阳区',parent:558,id:558-3,},{name:'东风区',parent:558,id:558-4,},{name:'郊区',parent:558,id:558-5,},{name:'同江市',parent:558,id:558-6,},{name:'富锦市',parent:558,id:558-7,},{name:'桦南县',parent:558,id:558-8,},{name:'桦南镇',parent:558,id:558-9,},{name:'桦川县',parent:558,id:558-10,},{name:'悦来镇',parent:558,id:558-11,},{name:'汤原县',parent:558,id:558-12,},{name:'汤原镇',parent:558,id:558-13,},{name:'抚远县',parent:558,id:558-14,},{name:'抚远镇',parent:558,id:558-15,},


	{name:'双鸭山市',parent:5,id:559,}, 
	{name:'尖山区',parent:559,id:559-1,},{name:'岭东区',parent:559,id:559-2,},{name:'四方台区',parent:559,id:559-3,},{name:'宝山区',parent:559,id:559-4,},{name:'集贤县',parent:559,id:559-5,},{name:'福利镇',parent:559,id:559-6,},{name:'友谊县',parent:559,id:559-7,},{name:'友谊镇',parent:559,id:559-8,},{name:'宝清县',parent:559,id:559-9,},{name:'宝清镇',parent:559,id:559-10,},{name:'饶河县',parent:559,id:559-11,},{name:'饶河镇',parent:559,id:559-12,},


	{name:'鸡西市',parent:5,id:5510,}, 
	{name:'鸡冠区',parent:5510,id:5510-1,},{name:'恒山区',parent:5510,id:5510-2,},{name:'滴道区',parent:5510,id:5510-3,},{name:'梨树区',parent:5510,id:5510-4,},{name:'城子河区',parent:5510,id:5510-5,},{name:'麻山区',parent:5510,id:5510-6,},{name:'虎林市',parent:5510,id:5510-7,},{name:'密山市',parent:5510,id:5510-8,},{name:'鸡东县',parent:5510,id:5510-9,},{name:'鸡东镇',parent:5510,id:5510-10,},

	{name:'牡丹江市',parent:5,id:5511,}, 
	{name:'爱民区',parent:5511,id:5511-1,},{name:'东安区',parent:5511,id:5511-2,},{name:'西安区',parent:5511,id:5511-3,},{name:'阳明区',parent:5511,id:5511-4,},{name:'穆棱市',parent:5511,id:5511-5,},{name:'绥芬河市',parent:5511,id:5511-6,},{name:'海林市',parent:5511,id:5511-7,},{name:'宁安市',parent:5511,id:5511-8,},{name:'东宁县',parent:5511,id:5511-9,},{name:'东宁镇',parent:5511,id:5511-10,},{name:'林口县',parent:5511,id:5511-11,},{name:'林口镇',parent:5511,id:5511-12,},


	{name:'绥化市',parent:5,id:5512,}, 
	{name:'北林区',parent:5512,id:5512-1,},{name:'安达市',parent:5512,id:5512-2,},{name:'肇东市',parent:5512,id:5512-3,},{name:'海伦市',parent:5512,id:5512-4,},{name:'望奎县',parent:5512,id:5512-5,},{name:'望奎镇',parent:5512,id:5512-6,},{name:'兰西县',parent:5512,id:5512-7,},{name:'兰西镇',parent:5512,id:5512-8,},{name:'青冈县',parent:5512,id:5512-9,},{name:'青冈镇',parent:5512,id:5512-10,},{name:'庆安县',parent:5512,id:5512-11,},{name:'庆安镇',parent:5512,id:5512-12,},{name:'明水县',parent:5512,id:5512-13,},{name:'明水镇',parent:5512,id:5512-14,},{name:'绥棱县',parent:5512,id:5512-15,},{name:'绥棱镇',parent:5512,id:5512-16,},

	{name:'大兴安岭地区',parent:5,id:5513,}, 
	{name:'呼玛县',parent:5513,id:5513-1,},{name:'呼玛镇',parent:5513,id:5513-2,},{name:'塔河县',parent:5513,id:5513-3,},{name:'塔河镇',parent:5513,id:5513-4,},{name:'漠河县',parent:5513,id:5513-5,},{name:'西林吉镇',parent:5513,id:5513-6,},{name:'辛集市',parent:5513,id:5513-7,},{name:'藁城市',parent:5513,id:5513-8,},{name:'张家口市',parent:5513,id:5513-9,},


	{name:'重庆市',parent:4,id:441,},
	{name:'渝中区',parent:441,id:4441,},
	{name:'大渡口区',parent:441,id:4442,},
	{name:'江北区',parent:441,id:4443, },
	{name:'沙坪坝区',parent:441,id:4444,}, 
	{name:'九龙坡区',parent:441,id:4445,},
	{name:'南岸区',parent:441,id:4446,},        
	{name:'北碚区',parent:441,id:4447,},
	{name:'万盛区',parent:441,id:4448,},
	{name:'双桥区',parent:441,id:4449,},
	{name:'渝北区',parent:441,id:44410,}, 
	{name:'巴南区',parent:441,id:44411,},
	{name:'万州区',parent:441,id:44412,},
	{name:'涪陵区',parent:441,id:44413,},
	{name:'黔江区',parent:441,id:44414,},
	{name:'长寿区',parent:441,id:44415,},
	{name:'合川市',parent:441,id:444416, },
	{name:'永川区市',parent:441,id:444417,}, 
	{name:'江津市',parent:441,id:44418,},
	{name:'南川市',parent:441,id:44419,},
	{name:'綦江县',parent:441,id:444420,},
	{name:'潼南县',parent:441,id:44421,},
	{name:'铜梁县',parent:441,id:44422, },
	{name:'大足县',parent:441,id:44423,}, 
	{name:'荣昌县',parent:441,id:444424,},
	{name:'璧山县',parent:441,id:44425,},        
	{name:'垫江县',parent:441,id:44426,},
	{name:'武隆县',parent:441,id:44427,},
	{name:'丰都县',parent:441,id:44428,},
	{name:'城口县',parent:441,id:44429,}, 
	{name:'梁平县',parent:441,id:44430,},
	{name:'开县',parent:441,id:44431,},
	{name:'巫溪县',parent:441,id:44432,},
	{name:'巫山县',parent:441,id:44433,},
	{name:'奉节县',parent:441,id:44434,},
	{name:'云阳县',parent:441,id:44435, },
	{name:'忠县',parent:441,id:44436,}, 
	{name:'石柱土家族自治县',parent:441,id:44437,},
	{name:'彭水苗族土家族自治县',parent:441,id:44438,},
	{name:'酉阳土家族苗族自治县',parent:441,id:44439,},
	{name:'秀山土家族苗族自治县',parent:441,id:44440,},



	{name:'天津市',parent:3,id:331,},
	{name:'和平区',parent:331,id:3331,},
	{name:'河东区',parent:331,id:3332,},
	{name:'河西区',parent:331,id:3333, },
	{name:'南开区',parent:331,id:3334,}, 
	{name:'河北区',parent:331,id:3335,},
	{name:'红桥区',parent:331,id:3336,},        
	{name:'塘沽区',parent:331,id:3337,},
	{name:'汉沽区',parent:331,id:3338,},
	{name:'东丽区',parent:331,id:3339,},
	{name:'西青区',parent:331,id:33310,}, 
	{name:'津南区',parent:331,id:33311,},
	{name:'北辰区',parent:331,id:33312,},
	{name:'武清区',parent:331,id:33313,},
	{name:'宝坻区',parent:331,id:33314,},
	{name:'蓟县',parent:331,id:33315,},
	{name:'宁河县',parent:331,id:33316, },
	{name:'芦台镇',parent:331,id:33317,}, 
	{name:'静海县',parent:331,id:33318,},
	{name:'静海镇',parent:331,id:33319,},



	{name:'上海市',parent:2,id:221,},
	{name:'黄浦区',parent:221,id:2221,},
	{name:'卢湾区',parent:221,id:2222,},
	{name:'徐汇区',parent:221,id:2223,},
	{name:'长宁区',parent:221,id:2224,}, 
	{name:'静安区',parent:221,id:2225,},
	{name:'普陀区',parent:221,id:2226,},        
	{name:'闸北区',parent:221,id:2227,},
	{name:'虹口区',parent:221,id:2228,},
	{name:'杨浦区',parent:221,id:2229, },
	{name:'闵行区',parent:221,id:22210,}, 
	{name:'宝山区',parent:221,id:22211,},
	{name:'嘉定区',parent:221,id:22212,},
	{name:'浦东新区',parent:221,id:22213,},
	{name:'金山区',parent:221,id:22214,},
	{name:'松江区',parent:221,id:22215,},
	{name:'青浦区',parent:221,id:22216, },
	{name:'南汇区',parent:221,id:22217,}, 
	{name:'奉贤区',parent:221,id:22218,},
	{name:'崇明县',parent:221,id:22219,},
	{name:'城桥镇',parent:221,id:22220,},

	{name:'北京市',parent:1,id:111,},
	{name:'东城区',parent:111,id:1111,},
	{name:'西城区',parent:111,id:1112,},
	{name:'崇文区',parent:111,id:1113,},
	{name:'宣武区',parent:111,id:1114,},
	{name:'朝阳区',parent:111,id:1115,},
	{name:'丰台区',parent:111,id:1116,},
	{name:'石景山区',parent:111,id:1117,},
	{name:'海淀区',parent:111,id:1118,},
	{name:'门头沟区',parent:111,id:1119,},
	{name:'房山区',parent:111,id:11110,},
	{name:'通州区',parent:111,id:11111,},
	{name:'顺义区',parent:111,id:11112,},
	{name:'昌平区',parent:111,id:11113,},
	{name:'大兴区',parent:111,id:11114,},
	{name:'怀柔区',parent:111,id:11115,},
	{name:'密云区',parent:111,id:11116,},
	{name:'平谷区',parent:111,id:11117,},
	{name:'密云县',parent:111,id:11118,},
	{name:'延庆县',parent:111,id:11119,},
	{name:'延庆镇',parent:111,id:11120,},







	{name:'石家庄市',parent:14,id:14-14-1,}, 
	{name:'长安区',parent:14-14-1,id:14-14-1-1,},{name:'桥东区',parent:14-14-1,id:14-14-1-2,},{name:'桥西区',parent:14-14-1,id:14-14-1-3,},{name:'新华区',parent:14-14-1,id:14-14-1-4,},{name:'裕华区',parent:14-14-1,id:14-14-1-5,},{name:'井陉矿区',parent:14-14-1,id:14-14-1-6,},{name:'辛集市',parent:14-14-1,id:14-14-1-7,},{name:'藁城市',parent:14-14-1,id:14-14-1-8,},{name:'张家口市',parent:14-14-1,id:14-14-1-9,},{name:'晋州市',parent:14-14-1,id:14-14-1-10,},{name:'新乐市',parent:14-14-1,id:14-14-1-11,},{name:'鹿泉市',parent:14-14-1,id:14-14-1-12,},{name:'井陉县',parent:14-14-1,id:14-14-1-13,},{name:'微水镇',parent:14-14-1,id:14-14-1-14,},{name:'正定县',parent:14-14-1,id:14-14-1-15,},{name:'正定镇',parent:14-14-1,id:14-14-1-16,},{name:'栾城县',parent:14-14-1,id:14-14-1-17,},{name:'栾城镇',parent:14-14-1,id:14-14-1-18,},{name:'行唐县',parent:14-14-1,id:14-14-1-19,},{name:'龙州镇',parent:14-14-1,id:14-14-1-20,},{name:'灵寿县',parent:14-14-1,id:14-14-1-21,},{name:'灵寿镇',parent:14-14-1,id:14-14-1-22,},{name:'高邑县',parent:14-14-1,id:14-14-1-23,},{name:'高邑镇',parent:14-14-1,id:14-14-1-24,},{name:'深泽县',parent:14-14-1,id:14-14-1-25,},{name:'深泽镇',parent:14-14-1,id:14-14-1-26,},{name:'赞皇县',parent:14-14-1,id:14-14-1-27,},{name:'赞皇镇',parent:14-14-1,id:14-14-1-28,},{name:'无极县',parent:14-14-1,id:14-14-1-29,},{name:'无极镇',parent:14-14-1,id:14-14-1-30,},{name:'平山县',parent:14-14-1,id:14-14-1-31,},{name:'平山镇',parent:14-14-1,id:14-14-1-32,},{name:'元氏县',parent:14-14-1,id:14-14-1-33,},{name:'槐阳镇',parent:14-14-1,id:14-14-1-34,},{name:'赵县',parent:14-14-1,id:14-14-1-35,},{name:'赵州镇',parent:14-14-1,id:14-14-1-36,},


	{name:'张家口市',parent:14,id:14-14-2,},

	{name:'桥西区',parent:14-14-2,id:14-14-2-1,},{name:'桥东区',parent:14-14-2,id:14-14-2-2,},{name:'宣化区',parent:14-14-2,id:14-14-2-3,},{name:'下花园区',parent:14-14-2,id:14-14-2-4,},{name:'宣化县',parent:14-14-2,id:14-14-2-5,},{name:'张家口市宣化区',parent:14-14-2,id:14-14-2-6,},{name:'张北县',parent:14-14-2,id:14-14-2-7,},{name:'张北镇',parent:14-14-2,id:14-14-2-8,},{name:'康保县',parent:14-14-2,id:14-14-2-9,},{name:'康保镇',parent:14-14-2,id:14-14-2-10,},{name:'沽源县',parent:14-14-2,id:14-14-2-11,},{name:'平定堡镇',parent:14-14-2,id:14-14-2-12,},{name:'尚义县',parent:14-14-2,id:14-14-2-13,},{name:'南壕堑镇',parent:14-14-2,id:14-14-2-14,},{name:'蔚县',parent:14-14-2,id:14-14-2-15,},{name:'蔚州镇',parent:14-14-2,id:14-14-2-16,},{name:'阳原县',parent:14-14-2,id:14-14-2-17,},{name:'怀安县',parent:14-14-2,id:14-14-2-18,},{name:'柴沟堡镇',parent:14-14-2,id:14-14-2-19,},{name:'万全县',parent:14-14-2,id:14-14-2-20,},{name:'孔家庄镇',parent:14-14-2,id:14-14-2-21,},{name:'怀来县',parent:14-14-2,id:14-14-2-22,},{name:'沙城镇',parent:14-14-2,id:14-2-23,},{name:'涿鹿县',parent:14-14-2,id:14-14-2-24,},{name:'涿鹿镇',parent:14-14-2,id:14-14-2-25,},{name:'赤城县',parent:14-14-2,id:14-14-2-26,},{name:'赤城镇',parent:14-14-2,id:14-14-2-27,},{name:'崇礼县',parent:14-14-2,id:14-14-2-28,},{name:'西湾子镇',parent:14-14-2,id:14-14-2-29,},

	{name:'承德市',parent:14,id:14-14-3,},

	{name:'双桥区',parent:14-14-3,id:14-14-3-1,},{name:'双滦区',parent:14-14-3,id:14-14-3-2,},{name:'鹰手营子矿区',parent:14-14-3,id:14-14-3-3,},{name:'承德县',parent:14-14-3,id:14-14-3-4,},{name:'下板城镇',parent:14-14-3,id:14-14-3-5,},{name:'兴隆县',parent:14-14-3,id:14-14-3-6,},{name:'兴隆镇',parent:14-14-3,id:14-14-3-7,},{name:'平泉县',parent:14-14-3,id:14-14-3-8,},{name:'平泉镇',parent:14-14-3,id:14-14-3-9,},{name:'滦平县',parent:14-14-3,id:14-14-3-10,},{name:'滦平镇',parent:14-14-3,id:14-14-3-11,},{name:'隆化县',parent:14-14-3,id:14-14-3-12,},{name:'隆化镇',parent:14-14-3,id:14-14-3-13,},{name:'丰宁满族自治县',parent:14-14-3,id:14-14-3-14,},{name:'大阁镇',parent:14-14-3,id:14-14-3-15,},{name:'宽城满族自治县',parent:14-14-3,id:14-14-3-16,},{name:'宽城镇',parent:14-14-3,id:14-14-3-17,},{name:'围场满族蒙古族自治县',parent:14-14-3,id:14-14-3-18,},{name:'围场镇',parent:14-14-3,id:14-14-3-19,},

	{name:'秦皇岛市',parent:14,id:14-14-4,},

	{name:'海港区',parent:14-14-4,id:14-14-4-1,},{name:'山海关区',parent:14-14-4,id:14-14-4-2,},{name:'北戴河区',parent:14-14-4,id:14-14-4-3,},{name:'昌黎县',parent:14-14-4,id:14-14-4-4,},{name:'昌黎镇',parent:14-14-4,id:14-14-4-5,},{name:'抚宁县',parent:14-14-4,id:14-14-4-6,},{name:'抚宁镇',parent:14-14-4,id:14-14-4-7,},{name:'卢龙县',parent:14-14-4,id:14-14-4-8,},{name:'卢龙镇',parent:14-14-4,id:14-14-4-9,},{name:'青龙满族自治县',parent:14-14-4,id:14-14-4-10,},{name:'青龙镇',parent:14-14-4,id:14-14-4-11,},

	{name:'唐山市',parent:14,id:14-14-5,}, 

	{name:'路北区',parent:14-14-5,id:14-14-5-1,},{name:'路南区',parent:14-14-5,id:14-14-5-2,},{name:'古冶区',parent:14-14-5,id:14-14-5-3,},{name:'开平区',parent:14-14-5,id:14-14-5-4,},{name:'丰润区',parent:14-14-5,id:14-14-5-5,},{name:'丰南区',parent:14-14-5,id:14-14-5-6,},{name:'遵化市',parent:14-14-5,id:14-14-5-7,},{name:'迁安市',parent:14-14-5,id:14-14-5-8,},{name:'滦县',parent:14-14-5,id:14-14-5-9,},{name:'滦州镇',parent:14-14-5,id:14-14-5-10,},{name:'滦南县',parent:14-14-5,id:14-14-5-11,},{name:'倴城镇',parent:14-14-5,id:14-14-5-12,},{name:'乐亭县',parent:14-14-5,id:14-14-5-13,},{name:'乐亭镇',parent:14-14-5,id:14-14-5-14,},{name:'迁西县',parent:14-14-5,id:14-14-5-15,},{name:'兴城镇',parent:14-14-5,id:14-14-5-16,},{name:'玉田县',parent:14-14-5,id:14-14-5-17,},{name:'玉田镇',parent:14-14-5,id:14-14-5-18,},{name:'唐海县',parent:14-14-5,id:14-14-5-19,},{name:'唐海镇',parent:14-14-5,id:14-14-5-20,},


	{name:'廊坊市',parent:14,id:14-14-6,},
	{name:'安次区',parent:14-14-6,id:14-14-6-1,},{name:'广阳区',parent:14-14-6,id:14-14-6-2,},{name:'霸州市',parent:14-14-6,id:14-14-6-3,},{name:'三河市',parent:14-14-6,id:14-14-6-4,},{name:'固安县',parent:14-14-6,id:14-14-6-5,},{name:'固安镇',parent:14-14-6,id:14-14-6-6,},{name:'永清县',parent:14-14-6,id:14-14-6-7,},{name:'永清镇',parent:14-14-6,id:14-14-6-8,},{name:'香河县',parent:14-14-6,id:14-14-6-9,},{name:'淑阳镇',parent:14-14-6,id:14-14-6-10,},{name:'大城县',parent:14-14-6,id:14-14-6-11,},{name:'平舒镇',parent:14-14-6,id:14-14-6-12,},{name:'文安县',parent:14-14-6,id:14-14-6-13,},{name:'文安镇',parent:14-14-6,id:14-14-6-14,},{name:'大厂回族自治县',parent:14-14-6,id:14-14-6-15,},{name:'大厂镇',parent:14-14-6,id:14-14-6-16,},

	{name:'保定市',parent:14,id:14-14-7,},  
	{name:'新市区',parent:14-14-7,id:14-14-7-1,},{name:'北市区',parent:14-14-7,id:14-14-7-2,},{name:'南市区',parent:14-14-7,id:14-14-7-3,},{name:'定州市',parent:14-14-7,id:14-14-7-4,},{name:'涿州市',parent:14-14-7,id:14-14-7-5,},{name:'安国市',parent:14-14-7,id:14-14-7-6,},{name:'高碑店市',parent:14-14-7,id:14-14-7-7,},{name:'满城县',parent:14-14-7,id:14-14-7-8,},{name:'满城镇',parent:14-14-7,id:14-14-7-9,},{name:'清苑县',parent:14-14-7,id:14-14-7-10,},{name:'清苑镇',parent:14-14-7,id:14-14-7-11,},{name:'易县',parent:14-14-7,id:14-14-7-12,},{name:'易州镇',parent:14-14-7,id:14-14-7-13,},{name:'徐水县',parent:14-14-7,id:14-14-7-14,},{name:'安肃镇',parent:14-14-7,id:14-14-7-15,},{name:'涞源县',parent:14-14-7,id:14-14-7-16,},{name:'涞源镇',parent:14-14-7,id:14-14-7-17,},{name:'定兴县',parent:14-14-7,id:14-14-7-18,},{name:'定兴镇',parent:14-14-7,id:14-14-7-19,},{name:'顺平县',parent:14-14-7,id:14-14-7-20,},{name:'蒲阳镇',parent:14-14-7,id:14-14-7-21,},{name:'唐县',parent:14-14-7,id:14-14-7-22,},{name:'仁厚镇',parent:14-14-7,id:14-14-7-23,},{name:'望都县',parent:14-14-7,id:14-14-7-24,},{name:'望都镇',parent:14-14-7,id:14-14-7-25,},{name:'涞水县',parent:14-14-7,id:14-14-7-26,},{name:'涞水镇',parent:14-14-7,id:14-14-7-27,},{name:'高阳县',parent:14-14-7,id:14-14-7-28,},{name:'高阳镇',parent:14-14-7,id:14-14-7-29,},{name:'安新县',parent:14-14-7,id:14-14-7-30,},{name:'安新镇',parent:14-14-7,id:14-14-7-31,},{name:'雄县',parent:14-14-7,id:14-14-7-32,},{name:'雄州镇',parent:14-14-7,id:14-14-7-33,},{name:'容城县',parent:14-14-7,id:14-14-7-34,},{name:'容城镇',parent:14-14-7,id:14-14-7-35,},{name:'曲阳县',parent:14-14-7,id:14-14-7-36,},{name:'恒州镇',parent:14-14-7,id:14-14-7-37,},{name:'阜平县',parent:14-14-7,id:14-14-7-38,},{name:'阜平镇',parent:14-14-7,id:14-14-7-39,},{name:'博野县',parent:14-14-7,id:14-14-7-40,},{name:'博陵镇',parent:14-14-7,id:14-14-7-41,},{name:'蠡县',parent:14-14-7,id:14-14-7-42,},{name:'蠡吾镇',parent:14-14-7,id:14-14-7-43,},


	{name:'衡水市',parent:14,id:14-14-8,},
	{name:'桃城区',parent:14-14-8,id:14-14-8-1,},{name:'冀州市',parent:14-14-8,id:14-14-8-2,},{name:'深州市',parent:14-14-8,id:14-14-8-3,},{name:'枣强县',parent:14-14-8,id:14-14-8-4,},{name:'枣强镇',parent:14-14-8,id:14-14-8-5,},{name:'武邑县',parent:14-14-8,id:14-14-8-6,},{name:'武邑镇',parent:14-14-8,id:14-14-8-7,},{name:'武强县',parent:14-14-8,id:14-14-8-8,},{name:'武强镇',parent:14-14-8,id:14-14-8-9,},{name:'饶阳县',parent:14-14-8,id:14-14-8-10,},{name:'饶阳镇',parent:14-14-8,id:14-14-8-11,},{name:'安平县',parent:14-14-8,id:14-14-8-12,},{name:'安平镇',parent:14-14-8,id:14-14-8-13,},{name:'故城县',parent:14-14-8,id:14-14-8-14,},{name:'郑口镇',parent:14-14-8,id:14-14-8-15,},{name:'景县',parent:14-14-8,id:14-14-8-16,},{name:'景州镇',parent:14-14-8,id:14-14-8-17,},{name:'阜城县',parent:14-14-8,id:14-14-8-18,},{name:'阜城镇',parent:14-14-8,id:14-14-8-19,},

	{name:'沧州市',parent:14,id:14-14-9,},
	{name:'运河区',parent:14-14-9,id:14-14-9-1,},{name:'新华区',parent:14-14-9,id:14-14-9-2,},{name:'泊头市',parent:14-14-9,id:14-14-9-3,},{name:'任丘市',parent:14-14-9,id:14-14-9-4,},{name:'黄骅市',parent:14-14-9,id:14-14-9-5,},{name:'河间市',parent:14-14-9,id:14-14-9-6,},{name:'沧县',parent:14-14-9,id:14-14-9-7,},{name:'沧州市新华区',parent:14-14-9,id:14-14-9-8,},{name:'青县',parent:14-14-9,id:14-14-9-9,},{name:'清州镇',parent:14-14-9,id:14-14-9-10,},{name:'东光县',parent:14-14-9,id:14-14-9-11,},{name:'东光镇',parent:14-14-9,id:14-14-9-12,},{name:'海兴县',parent:14-14-9,id:14-14-9-13,},{name:'苏基镇',parent:14-14-9,id:14-14-9-14,},{name:'盐山县',parent:14-14-9,id:14-14-9-15,},{name:'盐山镇',parent:14-14-9,id:14-14-9-16,},{name:'肃宁县',parent:14-14-9,id:14-14-9-17,},{name:'肃宁镇',parent:14-14-9,id:14-14-9-18,},{name:'南皮县',parent:14-14-9,id:14-14-9-19,},{name:'南皮镇',parent:14-14-9,id:14-14-9-20,},{name:'吴桥县',parent:14-14-9,id:14-14-9-21,},{name:'桑园镇',parent:14-14-9,id:14-14-9-22,},{name:'献县',parent:14-14-9,id:14-14-9-23,},{name:'乐寿镇',parent:14-14-9,id:14-14-9-24,},{name:'孟村回族自治县',parent:14-14-9,id:14-14-9-25,},{name:'孟村镇',parent:14-14-9,id:14-14-9-26,},
	{name:'邢台市',parent:14,id:14-14-11,},
	{name:'桥东区',parent:14-14-11,id:14-14-11-1,},{name:'桥西区',parent:14-14-11,id:14-14-11-2,},{name:'南宫市',parent:14-14-11,id:14-14-11-3,},{name:'沙河市',parent:14-14-11,id:14-14-11-4,},{name:'邢台县',parent:14-14-11,id:14-14-11-5,},{name:'邢台市桥东区',parent:14-14-11,id:14-14-11-6,},{name:'临城县',parent:14-14-11,id:14-14-11-7,},{name:'临城镇',parent:14-14-11,id:14-14-11-8,},{name:'内丘县',parent:14-14-11,id:14-14-11-9,},{name:'内丘镇',parent:14-14-11,id:14-14-11-10,},{name:'柏乡县',parent:14-14-11,id:14-14-11-11,},{name:'柏乡镇',parent:14-14-11,id:14-14-11-12,},{name:'隆尧县',parent:14-14-11,id:14-14-11-13,},{name:'隆尧镇',parent:14-14-11,id:14-14-11-14,},{name:'任县',parent:14-14-11,id:14-14-11-15,},{name:'任城镇',parent:14-14-11,id:14-14-11-16,},{name:'南和县',parent:14-14-11,id:14-14-11-17,},{name:'和阳镇',parent:14-14-11,id:14-14-11-18,},{name:'宁晋县',parent:14-14-11,id:14-14-11-19,},{name:'凤凰镇',parent:14-14-11,id:14-14-11-20,},{name:'巨鹿县',parent:14-14-11,id:14-14-11-21,},{name:'巨鹿镇',parent:14-14-11,id:14-14-11-22,},{name:'平乡县',parent:14-14-11,id:14-14-11-23,},{name:'丰州镇',parent:14-14-11,id:14-14-11-24,},{name:'威县',parent:14-14-11,id:14-14-11-25,},{name:'洺州镇',parent:14-14-11,id:14-14-11-26,},{name:'清河县',parent:14-14-11,id:14-14-11-27,},{name:'葛仙庄镇',parent:14-14-11,id:14-14-11-28,},{name:'临西县',parent:14-14-11,id:14-14-11-29,},{name:'临西镇',parent:14-14-11,id:14-14-11-30,},

	{name:'邯郸市',parent:14,id:14-14-12,}, 
	{name:'丛台区',parent:14-14-12,id:14-14-12-1,},{name:'邯山区',parent:14-14-12,id:14-14-12-2,},{name:'复兴区',parent:14-14-12,id:14-14-12-3,},{name:'峰峰矿区',parent:14-14-12,id:14-14-12-4,},{name:'武安市',parent:14-14-12,id:14-14-12-5,},{name:'邯郸县',parent:14-14-12,id:14-14-12-6,},{name:'南堡乡东小屯村',parent:14-14-12,id:14-14-12-7,},{name:'临漳县',parent:14-14-12,id:14-14-12-8,},{name:'临漳镇',parent:14-14-12,id:14-14-12-9,},{name:'成安县',parent:14-14-12,id:14-14-12-10,},{name:'成安镇',parent:14-14-12,id:14-14-12-11,},{name:'大名县',parent:14-14-12,id:14-14-12-12,},{name:'大名镇',parent:14-14-12,id:14-14-12-13,},{name:'涉县',parent:14-14-12,id:14-14-12-14,},{name:'涉城镇',parent:14-14-12,id:14-14-12-15,},{name:'磁县',parent:14-14-12,id:14-14-12-16,},{name:'磁州镇',parent:14-14-12,id:14-14-12-17,},{name:'肥乡县',parent:14-14-12,id:14-14-12-18,},{name:'肥乡镇',parent:14-14-12,id:14-14-12-19,},{name:'永年县',parent:14-14-12,id:14-14-12-20,},{name:'临洺关镇',parent:14-14-12,id:14-14-12-21,},{name:'邱县',parent:14-14-12,id:14-14-12-22,},{name:'新马头镇',parent:14-14-12,id:14-14-12-23,},{name:'鸡泽县',parent:14-14-12,id:14-14-12-24,},{name:'鸡泽镇',parent:14-14-12,id:14-14-12-25,},{name:'广平县',parent:14-14-12,id:14-14-12-26,},{name:'广平镇',parent:14-14-12,id:14-14-12-27,},{name:'馆陶县',parent:14-14-12,id:14-14-12-28,},{name:'馆陶镇',parent:14-14-12,id:14-14-12-29,},{name:'魏县',parent:14-14-12,id:14-14-12-30,},{name:'魏城镇',parent:14-14-12,id:14-14-12-31,},{name:'曲周县',parent:14-14-12,id:14-14-12-32,},{name:'曲周镇',parent:14-14-12,id:14-14-12-33,},




	];

	$scope.data={
		areas:2221,
	};
	this.findcity=function(parent){
		var parentId;
		angular.forEach($scope.cities,function(areas){
			if (areas.id===parent) {
				parentId=areas.parent;
				return;
			}
		})
		return parentId;
	}
    //让城市关联使用
    if ($scope.data.areas !== undefined) {
    	$scope.data.area=this.findcity($scope.data.areas);
    	$scope.data.province=this.findcity($scope.data.area);
    }
});