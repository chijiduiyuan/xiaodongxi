/*
 * cowcow定时器模块
 *
 * author cxf
 * versions 2017-07-7
 */

var Cron = module.exports;


/**
 * 删除过期游戏实例
 */
Cron.roomDel = function() {

	if(!G.roomObj){
		return;
	}
	var roomIdArr = G.roomObj.delTimeOutRoom(); //删除过期游戏实例

	var gameType = 'cowcow';
	
	//发送进程内正在游戏的房间数给PHP 用于做停机维护用
	G.phpPost({      
        "mod"	: 'common',
	    "game"	: gameType,//cowWater dzPoker
		"op" 	: 'gameProcessNum',  
		"sid" 	: App.getServerId(), //进程id
		"num" 	: roomIdArr.length //进程内正在游戏中房间数
    },function(){});
};