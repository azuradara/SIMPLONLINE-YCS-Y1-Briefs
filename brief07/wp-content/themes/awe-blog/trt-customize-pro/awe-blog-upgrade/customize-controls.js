( function( api ) {

	// Extends our custom "awe-blog-upgrade" section.
	api.sectionConstructor['awe-blog-upgrade'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
