jQuery(document).ready(function() {
	$(".swf").fancybox({
		/*onCancel		:	function() {
			return window.confirm('If canceling?');
		},*/
		beforeLoad	:	function() {
			return window.confirm('ȷ������Ƶ��');
		},
		/*
		afterLoad	:	function() {
            alert('After loading!');
		},
		beforeShow	:	function() {
            return window.confirm('Before changing in current item?');
		},
		afterShow	:	function() {
            alert('After opening!');
		},
		beforeChange	:	function() {
            return window.confirm('Before changing gallery item?');
		},*/
		beforeClose	:	function() {
            return window.confirm('���Ҫ�����˼Һ��᲻����');
		},
		afterClose	:	function() {
            alert('��Ƶ�Ѿ��ر�');
		},
	});
	
	
		$(".iframe").fancybox({
		'width'				: '50%',
		'height'			: '90%',
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe'
			});
});