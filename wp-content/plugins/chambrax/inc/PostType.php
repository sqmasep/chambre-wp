<?php

namespace Chambrax;

class PostType{
	public const SLUG = 'chambres';

	public function register(): void {
		add_action('init', function () {
			register_post_type(self::SLUG, [
				'labels'        => [
					'name'                     => 'Chambres',
					'singular_name'            => 'Chambre',

					'add_new'                  => 'Créer',
					'add_new_item'             => 'Créer une nouvelle chambre',

					'new_item'                 => 'Nouvelle chambre',
					'edit_item'                => 'Modifier la chambre',
					'view_item'                => 'Voir la chambre',
					'view_items'               => 'Voir les chambres',
					'search_items'             => 'Rechercher des chambres',

					'not_found'                => 'Aucune chambre trouvée',
					'not_found_in_trash'       => 'Aucune chambre trouvée dans la corbeille',

					'all_items'                => 'Toutes les chambres',

					'archives'                 => 'Archives des chambres',
					'attributes'               => 'Attributs des chambres',
					'insert_into_item'         => 'Insérer dans la chambre',
					'uploaded_to_this_item'    => 'Téléchargé dans cette chambre',

					'featured_image'           => 'Image à la une',
					'set_featured_image'       => 'Définir l\'image à la une',
					'use_featured_image'       => 'Utiliser comme image à la une',
					'remove_featured_image'    => 'Supprimer l\'image à la une',

					'filter_items_list'        => 'Filtrer la liste des chambres',
					'items_list_navigation'    => 'Navigation de la liste des chambres',
					'items_list'               => 'Liste des chambres',

					'item_published'           => 'Chambre publiée',
					'item_published_privately' => 'Chambre publiée en privé',

					'item_reverted_to_draft'   => 'Chambre revenue à l\'état de brouillon',
					'item_scheduled'           => 'Chambre planifiée',
					'item_updated'             => 'Chambre mise à jour',
				],
				'public'        => true,
				'has_archive'   => true,
				'rewrite'       => [ 'slug' => 'chambres' ],
				'supports'      => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],

				'menu_icon'     => 'dashicons-admin-multisite',
				'menu_position' => 20,
			] );

			if (function_exists('acf_add_local_field_group')) {
				acf_add_local_field_group([
					'key'      => 'group_chambres_fields',
					'title'    => 'Chambres Fields',
					'fields'   => [
						[
							'key'   => 'field_nombre_de_lits',
							'label' => 'Nombre de lits',
							'name'  => 'nombre_de_lits',
							'type'  => 'number',
						],
						[
							'key'   => 'field_prix',
							'label' => 'Prix',
							'name'  => 'prix',
							'type'  => 'number',
						],
					],
					'location' => [
						[
							[
								'param'    => 'post_type',
								'operator' => '==',
								'value'    => self::SLUG,
							],
						],
					],
				] );
			}

			register_taxonomy('type_de_lits', self::SLUG, [
				'label'        => 'Type de lits',
				'rewrite'      => [ 'slug' => 'type-de-lits' ],
				'hierarchical' => true,
			]);
			register_taxonomy('gamme_de_tarif', self::SLUG, [
				'label'        => 'Gamme de tarif',
				'rewrite'      => ['slug' => 'gamme-de-tarif'],
				'hierarchical' => true,
			]);
		});
	}
}