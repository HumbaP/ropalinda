<style type="text/css">
	#checkbox_wrapper{
		overflow-y: scroll;
		height: 350px;
		width: 100%;
	}

	#checkbox_wrapper span{
		font-size:0.9em;
	} 

	.checkbox{
		width: 30%;
		display: inline-block;
		font-size: 1.1em;
		margin-bottom: 5px;
		margin-right: 10px;
	}

	.checkbox input[type=checkbox]{
		transform: scale(1.3);
	}

	.checkbox img{
		width: 14%;
	}

	#container{
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: #ececec;
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}
	#container-modal{
		background-color: #ececec;
		width: 60%;
		margin: 15% auto;
		padding: 20px;
		text-align: center;
		padding-top: 20px;
		padding-right: 30px;
		padding-left: 30px;
		padding-bottom: 20px;
		font-family: ropalinda-main;
		font-size: 1.2em;
	}

	#add_container {
		margin-bottom: 20px;
	}
	#add_container span{
		margin-right: 100px;
		font-size: 1.8em;
	}

	#add_container button{
		margin-left: 150px;
		font-size: 1.1em;
		width: 25%;
		height: 8%;
		border:none;
		background-color: #DDDDDD;
		cursor: pointer;
	}

	/* The Close Button */
	.close {
		color: #aaa;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}

	.close:hover,
	.close:focus {
		color: black;
		text-decoration: none;
		cursor: pointer;
	}

</style>

<div id="container">
	<div id="container-modal">
		<div id="add_container">
			<span class="close">&times;</span>
			<span>Agregado</span>

			<button>Nuevo +</button>
		</div>

		<div id="checkbox_wrapper">

			<?php 
				for ($i = 1; $i <= 30; $i++) {		
			?>

			<div class="checkbox">
				<input type="checkbox"> 
				<img src="<?php echo base_url('public/')?>img/offline/sticker/Angry-Panda-Sticker.png"">
				<span>Componente</span> 
			</div>

			<?php }?>

		</div>
	</div>
</div>