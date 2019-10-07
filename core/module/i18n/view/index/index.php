<?php echo template::formOpen('i18nIndex'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('configBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl(false),
				'ico' => 'home',
				'value' => 'Accueil'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('configSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col8">
			<div class="block">
				<h4>Ajouter une localisation</h4>
				<div class="row">			
					<div class="col5">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Copier la structure de',
							'help' => 'Ne rien sélectionner pour une copie vierge ',
							'selected' => -1 					
						]); ?>
					</div>
					<div class="col1">
						<?php echo template::ico('right-big'); ?>
					</div>
					<div class="col5">
						<?php 
							$available = array ('' => 'Sélectionner');
							$available = array_merge ($available, self::$i18nList);
							echo template::select('i18nLanguageAdd', $available, [
							'label' => 'vers'
							]); ?>
					</div>
				</div>
			</div>
		</div>	
		<div class="col4">
			<div class="block">
				<h4>Supprimer une localisation</h4>
				<div class="row">
					<?php echo template::select('i18nLanguageRemove', $this->i18nInstalled(true, true), [
						'label' => 'Localisations installées',
						'help' => 'La suppression d\'une langue entraîne l\'effacement des pages et des modules',
						'selected' => -1 					
					]); ?>
				</div>
			</div>
		</div>	
	</div>
	<!--
	<div class="row">
		<div class="col4">
			<?php echo template::select('i18nHomePageId', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
				'label' => 'Page d\'accueil',
				//'selected' => $this->getData(['config', 'homePageId'])
			]); ?>
		</div>
	</div>
	-->
<?php echo template::formClose(); ?>