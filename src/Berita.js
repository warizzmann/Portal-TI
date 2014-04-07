Ext.define('MyDesktop.Berita', {
		extend: 'Ext.ux.desktop.Module',

		id:'berita',

		createWindow : function(){
			var desktop = this.app.getDesktop();
			var win = desktop.getWindow('berita');
			if(!win){
				win = desktop.createWindow({	
				layout: 'border',
				title: 'Berita Teknik Informatika',
				width: 640,
				height: 480,
				items: [
				{
				xtype: 'panel',
				region: 'west',
				html: 'Kategori',
				width: 150,
				title: 'Kategori',
				collapseDirection: 'left',
				collapsible: true,
				split: true,
				lbar: [{
							text: 'Terbaru',
							textAlign: 'left',
							iconCls: 'x-datepicker-next'
						},{
							text: 'Jadwal Kosong',
							textAlign: 'left',
							iconCls: 'x-datepicker-next'
						},{
							text: 'Kegiatan Internal',
							textAlign: 'left',
							iconCls: 'x-datepicker-next'
						},
						{
							text: 'Kegiatan External',
							textAlign: 'left',
							iconCls: 'x-datepicker-next'
						},
						{
							text: 'Lain-lain',
							textAlign: 'left',
							iconCls: 'x-datepicker-next'
						}
					]
				},
				{
				xtype: 'panel',
				itemId: 'centerregion',
				region: 'center',
				autoLoad:{
					  url : 'lib/berita.php'
					}
				}
				]
				});
			}
			return win;
		}
	});
	
	function detailed(id,judul){
		Ext.onReady(function () {
			Ext.create('Ext.window.Window', {
				title: judul,
				height: 480,
				width: 480,
				maximizable: true,
				overflowY: 'auto',
				closable: true,
				autoLoad:{
					  url : 'lib/detailberita.php?id='+id+''
					}
			}).show();
		});
	}