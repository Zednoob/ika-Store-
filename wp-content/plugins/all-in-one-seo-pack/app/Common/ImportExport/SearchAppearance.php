<?php
namespace AIOSEO\Plugin\Common\ImportExport;

/**
 * Migrates the Search Appearance settings.
 *
 * @since 4.0.0
 */
abstract class SearchAppearance {

	/**
	 * The schema graphs we support.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	public static $supportedSchemaGraphs = [
		'none',
		'WebPage',
		'Article'
	];

	/**
	 * The WebPage graphs we support.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	public static $supportedWebPageGraphs = [
		'AboutPage',
		'CollectionPage',
		'ContactPage',
		'FAQPage',
		'ItemPage',
		'ProfilePage',
		'QAPage',
		'RealEstateListing',
		'SearchResultsPage',
		'WebPage'
	];

	/**
	 * The Article graphs we support.
	 *
	 * @since 4.0.0
	 *
	 * @var array
	 */
	public static $supportedArticleGraphs = [
		'Article',
		'BlogPosting',
		'NewsArticle'
	];
}