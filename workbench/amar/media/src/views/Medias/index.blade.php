 	   
 <div class="bloc">
    <div class="content">
				<div id="plupload">
		    <div id="droparea" href="#">
		    	<p>Déplacer les fichiers ici</p>
		    	ou<br/>
		    	<a id="browse" href="#">Parcourir</a>
		    	<p class="small">(jpg, png seulement)</p>
		    </div>
		</div>
		<table class="head" cellspacing="0">
			<thead>
				<tr>
					<th style="width:55%">Médias</th>
					<th style="width:20%"> &nbsp; </th>
					<th style="width:25%">Actions</th>
				</tr>
			</thead>
		</table>
		<div id="filelist">

			{{Form::open(array('url'=>URL::route('media/order'),'id'=>'MediaIndexForm'))}}						
			<div class="item ">

					<input type="hidden" value="2" name="data[Media][34]">

					<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Maconnerie_Platrerie.jpg" alt="" /></div>
					JMA_renovation_Maconnerie_Platrerie.jpg
					<div class="actions">
									<a href="http://localhost/Plomberie/media/medias/delete/34" class="del">Supprimer</a>					</div>
					<div class="expand">
						<table>
							<tr>
								<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Maconnerie_Platrerie.jpg" alt="" /></td>
								<td>
									<p><strong>Nom du fichier :</strong> JMA_renovation_Maconnerie_Platrerie.jpg</p>
									<p><strong>Taille de l'image :</strong> 1200x798</p>
								</td>
							</tr>
						</table>
						<table>
							<tr>
								<td style="width:140px"><label>Titre</label></td>
								<td><input class="title" name="title" type="text" value="JMA_renovation_Maconnerie_Platrerie.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Texte alternatif</label></td>
								<td><input class="alt" name="alt" type="text"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Cible du lien</label></td>
								<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Maconnerie_Platrerie.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Alignement</label></td>
								<td>
									<input type="radio" name="align-34" class="align" id="align-none-34" value="none" checked>
									<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-34">Aucun</label>

									<input type="radio" name="align-34" class="align" id="align-left-34" value="left">
									<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-34">Gauche</label>

									<input type="radio" name="align-34" class="align" id="align-center-34" value="center">
									<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-34">Centre</label>

									<input type="radio" name="align-34" class="align" id="align-right-34" value="right">
									<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-34">Droite</label>
								</td>
							</tr>
							<tr>
								<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
								<td>
									<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/34" class="del">Supprimer</a></p>
								</td>
							</tr>
							<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Maconnerie_Platrerie.jpg" class="file">
						</table>
					</div>
			</div>							
			<div class="item ">

					<input type="hidden" value="3" name="data[Media][33]">

					<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Plomberie_Chauffage.jpg" alt="" /></div>
					JMA_renovation_Plomberie_Chauffage.jpg
					<div class="actions">
									<a href="{{URL::route('media/delete',31)}}" class="del">Supprimer</a>					</div>
					<div class="expand">
						<table>
							<tr>
								<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Plomberie_Chauffage.jpg" alt="" /></td>
								<td>
									<p><strong>Nom du fichier :</strong> JMA_renovation_Plomberie_Chauffage.jpg</p>
									<p><strong>Taille de l'image :</strong> 1200x972</p>
								</td>
							</tr>
						</table>
						<table>
							<tr>
								<td style="width:140px"><label>Titre</label></td>
								<td><input class="title" name="title" type="text" value="JMA_renovation_Plomberie_Chauffage.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Texte alternatif</label></td>
								<td><input class="alt" name="alt" type="text"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Cible du lien</label></td>
								<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Plomberie_Chauffage.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Alignement</label></td>
								<td>
									<input type="radio" name="align-33" class="align" id="align-none-33" value="none" checked>
									<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-33">Aucun</label>

									<input type="radio" name="align-33" class="align" id="align-left-33" value="left">
									<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-33">Gauche</label>

									<input type="radio" name="align-33" class="align" id="align-center-33" value="center">
									<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-33">Centre</label>

									<input type="radio" name="align-33" class="align" id="align-right-33" value="right">
									<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-33">Droite</label>
								</td>
							</tr>
							<tr>
								<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
								<td>
									<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/33" class="del">Supprimer</a></p>
								</td>
							</tr>
							<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Plomberie_Chauffage.jpg" class="file">
						</table>
					</div>
			</div>							
			<div class="item ">

					<input type="hidden" value="4" name="data[Media][36]">

					<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Electricite_generale_1.jpg" alt="" /></div>
					JMA_renovation_Electricite_generale_1.jpg
					<div class="actions">
									<a href="http://localhost/Plomberie/media/medias/delete/36" class="del">Supprimer</a>					</div>
					<div class="expand">
						<table>
							<tr>
								<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Electricite_generale_1.jpg" alt="" /></td>
								<td>
									<p><strong>Nom du fichier :</strong> JMA_renovation_Electricite_generale_1.jpg</p>
									<p><strong>Taille de l'image :</strong> 1148x765</p>
								</td>
							</tr>
						</table>
						<table>
							<tr>
								<td style="width:140px"><label>Titre</label></td>
								<td><input class="title" name="title" type="text" value="JMA_renovation_Electricite_generale_1.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Texte alternatif</label></td>
								<td><input class="alt" name="alt" type="text"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Cible du lien</label></td>
								<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Electricite_generale_1.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Alignement</label></td>
								<td>
									<input type="radio" name="align-36" class="align" id="align-none-36" value="none" checked>
									<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-36">Aucun</label>

									<input type="radio" name="align-36" class="align" id="align-left-36" value="left">
									<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-36">Gauche</label>

									<input type="radio" name="align-36" class="align" id="align-center-36" value="center">
									<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-36">Centre</label>

									<input type="radio" name="align-36" class="align" id="align-right-36" value="right">
									<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-36">Droite</label>
								</td>
							</tr>
							<tr>
								<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
								<td>
									<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/36" class="del">Supprimer</a></p>
								</td>
							</tr>
							<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Electricite_generale_1.jpg" class="file">
						</table>
					</div>
			</div>							
			<div class="item ">

					<input type="hidden" value="5" name="data[Media][32]">

					<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Revetements_sols_et_carrelages.jpg" alt="" /></div>
					JMA_renovation_Revetements_sols_et_carrelages.jpg
					<div class="actions">
									<a href="http://localhost/Plomberie/media/medias/delete/32" class="del">Supprimer</a>					</div>
					<div class="expand">
						<table>
							<tr>
								<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Revetements_sols_et_carrelages.jpg" alt="" /></td>
								<td>
									<p><strong>Nom du fichier :</strong> JMA_renovation_Revetements_sols_et_carrelages.jpg</p>
									<p><strong>Taille de l'image :</strong> 1041x818</p>
								</td>
							</tr>
						</table>
						<table>
							<tr>
								<td style="width:140px"><label>Titre</label></td>
								<td><input class="title" name="title" type="text" value="JMA_renovation_Revetements_sols_et_carrelages.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Texte alternatif</label></td>
								<td><input class="alt" name="alt" type="text"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Cible du lien</label></td>
								<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Revetements_sols_et_carrelages.jpg"></td>
							</tr>
							<tr>
								<td style="width:140px"><label>Alignement</label></td>
								<td>
									<input type="radio" name="align-32" class="align" id="align-none-32" value="none" checked>
									<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-32">Aucun</label>

									<input type="radio" name="align-32" class="align" id="align-left-32" value="left">
									<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-32">Gauche</label>

									<input type="radio" name="align-32" class="align" id="align-center-32" value="center">
									<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-32">Centre</label>

									<input type="radio" name="align-32" class="align" id="align-right-32" value="right">
									<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-32">Droite</label>
								</td>
							</tr>
							<tr>
								<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
								<td>
									<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/32" class="del">Supprimer</a></p>
								</td>
							</tr>
							<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Revetements_sols_et_carrelages.jpg" class="file">
						</table>
					</div>
			</div>							
			<div class="item ">

		<input type="hidden" value="6" name="data[Media][31]">

		<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Peintures_et_Papiers_Peints.jpg" alt="" /></div>
		JMA_renovation_Peintures_et_Papiers_Peints.jpg
		<div class="actions">
						<a href="http://localhost/Plomberie/media/medias/delete/31" class="del">Supprimer</a>					</div>
		<div class="expand">
			<table>
				<tr>
					<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Peintures_et_Papiers_Peints.jpg" alt="" /></td>
					<td>
						<p><strong>Nom du fichier :</strong> JMA_renovation_Peintures_et_Papiers_Peints.jpg</p>
						<p><strong>Taille de l'image :</strong> 1000x1000</p>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td style="width:140px"><label>Titre</label></td>
					<td><input class="title" name="title" type="text" value="JMA_renovation_Peintures_et_Papiers_Peints.jpg"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Texte alternatif</label></td>
					<td><input class="alt" name="alt" type="text"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Cible du lien</label></td>
					<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Peintures_et_Papiers_Peints.jpg"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Alignement</label></td>
					<td>
						<input type="radio" name="align-31" class="align" id="align-none-31" value="none" checked>
						<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-31">Aucun</label>

						<input type="radio" name="align-31" class="align" id="align-left-31" value="left">
						<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-31">Gauche</label>

						<input type="radio" name="align-31" class="align" id="align-center-31" value="center">
						<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-31">Centre</label>

						<input type="radio" name="align-31" class="align" id="align-right-31" value="right">
						<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-31">Droite</label>
					</td>
				</tr>
				<tr>
					<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
					<td>
						<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/31" class="del">Supprimer</a></p>
					</td>
				</tr>
				<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_renovation_Peintures_et_Papiers_Peints.jpg" class="file">
			</table>
		</div>
</div>							
<div class="item ">

		<input type="hidden" value="7" name="data[Media][52]">

		<div class="visu"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_Renovation_Menuiserie-1.png" alt="" /></div>
		JMA_Renovation_Menuiserie-1.png
		<div class="actions">
						<a href="http://localhost/Plomberie/media/medias/delete/52" class="del">Supprimer</a>					</div>
		<div class="expand">
			<table>
				<tr>
					<td style="width:140px"><img src="http://localhost/Plomberie/img/slides/2014/03/JMA_Renovation_Menuiserie-1.png" alt="" /></td>
					<td>
						<p><strong>Nom du fichier :</strong> JMA_Renovation_Menuiserie-1.png</p>
						<p><strong>Taille de l'image :</strong> 1000x667</p>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td style="width:140px"><label>Titre</label></td>
					<td><input class="title" name="title" type="text" value="JMA_Renovation_Menuiserie-1.png"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Texte alternatif</label></td>
					<td><input class="alt" name="alt" type="text"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Cible du lien</label></td>
					<td><input class="href" name="href" type="text" value="http://localhost/Plomberie/img/slides/2014/03/JMA_Renovation_Menuiserie-1.png"></td>
				</tr>
				<tr>
					<td style="width:140px"><label>Alignement</label></td>
					<td>
						<input type="radio" name="align-52" class="align" id="align-none-52" value="none" checked>
						<img src="http://localhost/Plomberie/media/img/align-none.png" alt="" /><label for="align-none-52">Aucun</label>

						<input type="radio" name="align-52" class="align" id="align-left-52" value="left">
						<img src="http://localhost/Plomberie/media/img/align-left.png" alt="" /><label for="align-left-52">Gauche</label>

						<input type="radio" name="align-52" class="align" id="align-center-52" value="center">
						<img src="http://localhost/Plomberie/media/img/align-center.png" alt="" /><label for="align-center-52">Centre</label>

						<input type="radio" name="align-52" class="align" id="align-right-52" value="right">
						<img src="http://localhost/Plomberie/media/img/align-right.png" alt="" /><label for="align-right-52">Droite</label>
					</td>
				</tr>
				<tr>
					<td style="width:140px"><input type="hidden" class="filetype" name="filetype" value="pic" /></td>
					<td>
						<p><a href="" class="submit">Insérer dans l'article</a> <a href="http://localhost/Plomberie/media/medias/delete/52" class="del">Supprimer</a></p>
					</td>
				</tr>
				<input type="hidden" name="file" value="http://localhost/Plomberie/img/slides/2014/03/JMA_Renovation_Menuiserie-1.png" class="file">
			</table>
		</div>
</div>						</form>		</div>    </div>
</div>

@section('script')
@parent
{{HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js')}}
{{HTML::script('packages/amar/media/js/jquery.form.js')}}
{{HTML::script('packages/amar/media/js/plupload.js')}}
{{HTML::script('packages/amar/media/js/plupload.html5.js')}}
{{HTML::script('packages/amar/media/js/plupload.flash.js')}}
<script>
	

jQuery(function(){
	$( "#filelist>form" ).sortable({
		update:function(){
			i = 0;
			$('#filelist>form>div').each(function(){
				i++;
				console.log(i);
				$(this).find('input').val(i);
			});
			$('#MediaIndexForm').ajaxSubmit();
			
		}

	});

$('a.del').live('click',function(e){
		e.preventDefault();
		elem = $(this);
		if(confirm('"Voulez vous vraiment supprimer ce média ?"')){
			$.post(elem.attr('href'),{},function(data){
				elem.parents('.item').slideUp();
			});
		}
		theFrame.animate({ height:theFrame.height() - 40 });
	});	
	var theFrame = $("#medias-{{$ref}}-{{$ref_id}}", parent.document.body);
	var uploader = new plupload.Uploader({
		runtimes : 'html5,flash',
		container: 'plupload',
		browse_button : 'browse',
		max_file_size : '50mb',
		flash_swf_url : {{HTML::script('packages/amar/media/js/plupload.flash.swf')}},
		url : '/',
		 filters : [
			{title : "Accepted files", extensions : "/"},
		],
		drop_element : 'droparea',
		multipart:true,
		urlstream_upload:true
	});


});


</script>
@stop
