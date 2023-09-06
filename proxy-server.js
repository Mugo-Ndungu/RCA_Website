const express = require('express');
const axios = require('axios');

const app = express();
const port = 3000;

// Proxy endpoint
app.get('/proxy', async (req, res) => {
  try {
    // Get the YouTube video URL from the query parameter
    const videoUrl = req.query.videoUrl;

    // Fetch the video content from YouTube
    const response = await axios.get(videoUrl);

    // Set the appropriate headers to allow cross-origin requests
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, OPTIONS');
    res.setHeader('Access-Control-Allow-Headers', 'Origin, Content-Type');

    // Return the YouTube video content
    res.send(response.data);
  } catch (error) {
    console.error(error);
    res.status(500).send('Proxy error');
  }
});

// Start the server
app.listen(port, () => {
  console.log(`Proxy server listening at http://localhost:${port}`);
});
