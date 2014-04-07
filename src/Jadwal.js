Ext.define('MyDesktop.Jadwal', {
		extend: 'Ext.ux.desktop.Module',

		id:'jadwal',

		createWindow : function(){
			var desktop = this.app.getDesktop();
			var win = desktop.getWindow('jadwal');
			if(!win){
				win = desktop.createWindow({
					id: 'jadwal',
					title:'Jadwal Kuliah',
					autoScroll: true,
					loadMask:true,
					iconCls: 'jadwal',
					height:600,
					layout: 'fit',
					y : 10,
					x : 300,
					minWidth: 200,
					autoLoad:{
					  url : 'lib/jadwal.php'
					}
				});
			}
			return win;
		}
	});