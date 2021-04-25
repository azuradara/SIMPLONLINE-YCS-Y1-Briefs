async function postData(url = '', data = { ye: 'yep' }) {
	const response = await fetch(
		url,
		{
			method: 'post',
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json',
			},
		},
	)

	return response.json()
}