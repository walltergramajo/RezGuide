<script>

(function(){

	var deleteButtons = document.querySelectorAll('.del'),
		delModal = document.querySelector("#popup"),
		delCancel = document.querySelector("#cancelDel"),
		delRecord = document.querySelector("#deleteMe"),
		recordId,
		returnCont,
		returnFunc;

	for(i=0 ; i < deleteButtons.length ; i++){
		deleteButtons[i].addEventListener("click", function(e){
			e.preventDefault();
			delModal.classList.add("modalup");
			recordId = this.dataset.record;
			returnCont = this.dataset.controller;
			returnFunc = this.dataset.function;
			delRecord.href="<?php echo base_url(); ?>index.php/" + returnCont + "/delete_record/" + returnFunc + "/" + recordId;
		}, false);
	}

	delCancel.addEventListener("click", function(e){
		e.preventDefault();
		delModal.classList.remove("modalup");
	}, false);

})();

</script>