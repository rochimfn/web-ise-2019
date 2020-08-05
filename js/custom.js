 var userFeed = new Instafeed({
    get: 'user',
    userId: '',
    clientId: '',
    accessToken: '',
    resolution: 'standard_resolution',
    template: '<a href="{{link}}" target="_blank"><img src="{{image}}" class="col-md-4"; title="Visit on Instagram"/></a>',
    sortBy: 'most-recent',
    limit: 9,
    links: false
 });
 userFeed.run();