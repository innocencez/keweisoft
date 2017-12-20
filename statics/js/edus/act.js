$(function(){
//企业活动页js
	$('#carousel').carouFredSel({
		width: 846,
		height: 451,
		align: false,
		padding: [0, 650, 0, 0],
		items: {
			width: 50,
			height: 525,
			visible: 5,
			minimum: 1
		},
		scroll: {
			items: 1,
			duration: 750,
			onBefore: function( data ) {
				data.items.old.add( data.items.visible ).find( 'span' ).stop().slideUp();
			},
			onAfter: function( data ) {
				data.items.visible.last().find( 'span' ).stop().slideDown();
			}
		},
		auto: true,
		onCreate: function() {
			$(this).children().each(function() {
				$(this).append( '<span>' + $('img', this).attr( 'alt' ) + '</span>' );
				$(this).find( 'span' ).hide();
			});
		}
	});
	$('#carousel').children().click(function() {
		$('#carousel').trigger( 'slideTo', [this, -4, 'prev'] );
	});	
})