<style>
    		/* footer social icon  */
		/* Remove any unwanted white background or padding around social icons */
		.social-icons,
		.social-icons li,
		.social-icons li a,
		.social-icons li img {
		background: transparent !important;
		border: none !important;
		box-shadow: none !important;
		outline: none !important;
		}

		/* Style for the icons */
		.social-icons {
		list-style: none;
		display: flex;
		gap: 12px;
		padding: 0;
		margin: 0;
		align-items: center;
		}

		.social-icons li img {
		display: block;
		width: 40px;
		height: auto;
		border-radius: 6px; /* optional */
		transition: transform 0.3s ease, box-shadow 0.3s ease;
		}

		/* Hover effect */
		.social-icons li img:hover {
		box-shadow: 0 4px 12px rgba(255, 255, 255, 0.4);
		transform: scale(1.05);
		}

		/* navbar space renove */
		/* Force remove space between FB and YouTube icons in header */
		.header-nav-top .nav.px-0.py-0 {
			display: flex !important;
			align-items: center !important;
			justify-content: flex-start !important;
			gap: 0 !important; /* no gap */
			margin: 0 !important;
			padding: 0 !important;
		}

		.header-nav-top .nav.px-0.py-0 .nav-item {
			display: inline-flex !important;
			align-items: center !important;
			margin: 0 !important;
			padding: 0 !important;
		}

		.header-nav-top .nav.px-0.py-0 .nav-item a {
			display: inline-flex !important;
			align-items: center !important;
			padding: 0 !important;
			margin: 0 !important;
		}

		.header-nav-top .nav.px-0.py-0 img {
			width: 24px !important; /* control icon size */
			height: auto !important;
			margin: 0 !important;
			padding: 0 !important;
			display: block !important;
		}

</style>