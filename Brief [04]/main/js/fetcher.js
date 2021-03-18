export async function postData( url = '', data = {}) {
	const response = await fetch(
		url,
		{
			method: 'post',
			headers: {
				'Content-Type' : 'application/json',
				'Accept' : 'application/json',
			},
			body: JSON.stringify( data ),
		},
	)

	return response.json()
}