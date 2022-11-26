const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"debugbar.openhandler":{"uri":"_debugbar\/open","methods":["GET","HEAD"]},"debugbar.clockwork":{"uri":"_debugbar\/clockwork\/{id}","methods":["GET","HEAD"]},"debugbar.assets.css":{"uri":"_debugbar\/assets\/stylesheets","methods":["GET","HEAD"]},"debugbar.assets.js":{"uri":"_debugbar\/assets\/javascript","methods":["GET","HEAD"]},"debugbar.cache.delete":{"uri":"_debugbar\/cache\/{key}\/{tags?}","methods":["DELETE"]},"livewire.message":{"uri":"livewire\/message\/{name}","methods":["POST"]},"livewire.upload-file":{"uri":"livewire\/upload-file","methods":["POST"]},"livewire.preview-file":{"uri":"livewire\/preview-file\/{filename}","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"login":{"uri":"login","methods":["GET","HEAD"]},"logout":{"uri":"logout","methods":["POST"]},"register":{"uri":"register","methods":["GET","HEAD"]},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"]},"password.email":{"uri":"password\/email","methods":["POST"]},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"]},"password.update":{"uri":"password\/reset","methods":["POST"]},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"]},"admins.backend.index":{"uri":"admins\/backend","methods":["GET","HEAD"]},"admins.users.index":{"uri":"admins\/users","methods":["GET","HEAD"]},"admins.users.create":{"uri":"admins\/users\/create","methods":["GET","HEAD"]},"admins.users.store":{"uri":"admins\/users","methods":["POST"]},"admins.users.show":{"uri":"admins\/users\/{user}","methods":["GET","HEAD"],"bindings":{"user":"id"}},"admins.users.edit":{"uri":"admins\/users\/{user}\/edit","methods":["GET","HEAD"],"bindings":{"user":"id"}},"admins.users.update":{"uri":"admins\/users\/{user}","methods":["PUT","PATCH"],"bindings":{"user":"id"}},"admins.users.destroy":{"uri":"admins\/users\/{user}","methods":["DELETE"],"bindings":{"user":"id"}},"admins.users.status":{"uri":"admins\/user-status","methods":["POST"]},"admins.podcasts.index":{"uri":"admins\/podcasts","methods":["GET","HEAD"]},"admins.podcasts.create":{"uri":"admins\/podcasts\/create","methods":["GET","HEAD"]},"admins.podcasts.store":{"uri":"admins\/podcasts","methods":["POST"]},"admins.podcasts.show":{"uri":"admins\/podcasts\/{podcast}","methods":["GET","HEAD"],"bindings":{"podcast":"id"}},"admins.podcasts.edit":{"uri":"admins\/podcasts\/{podcast}\/edit","methods":["GET","HEAD"],"bindings":{"podcast":"id"}},"admins.podcasts.update":{"uri":"admins\/podcasts\/{podcast}","methods":["PUT","PATCH"],"bindings":{"podcast":"id"}},"admins.podcasts.destroy":{"uri":"admins\/podcasts\/{podcast}","methods":["DELETE"],"bindings":{"podcast":"id"}},"admins.seminar.index":{"uri":"admins\/seminar","methods":["GET","HEAD"]},"admins.seminar.create":{"uri":"admins\/seminar\/create","methods":["GET","HEAD"]},"admins.seminar.store":{"uri":"admins\/seminar","methods":["POST"]},"admins.seminar.show":{"uri":"admins\/seminar\/{seminar}","methods":["GET","HEAD"],"bindings":{"seminar":"id"}},"admins.seminar.edit":{"uri":"admins\/seminar\/{seminar}\/edit","methods":["GET","HEAD"],"bindings":{"seminar":"id"}},"admins.seminar.update":{"uri":"admins\/seminar\/{seminar}","methods":["PUT","PATCH"],"bindings":{"seminar":"id"}},"admins.seminar.destroy":{"uri":"admins\/seminar\/{seminar}","methods":["DELETE"],"bindings":{"seminar":"id"}},"admins.seminar.status":{"uri":"admins\/seminar-status","methods":["POST"]},"admins.booking.index":{"uri":"admins\/bookings","methods":["GET","HEAD"]},"admins.":{"uri":"admins\/remove-seminar","methods":["DELETE"]},"admins.booking.show":{"uri":"admins\/bookings\/{booking}","methods":["GET","HEAD"],"bindings":{"booking":"id"}},"admins.ticket.search":{"uri":"admins\/search","methods":["GET","HEAD"]},"admins.profile.index":{"uri":"admins\/profile","methods":["GET","HEAD"]},"admins.profile.update":{"uri":"admins\/profile\/edit\/{user}\/update","methods":["PUT"],"bindings":{"user":"id"}},"admins.profile.password":{"uri":"admins\/profile\/password","methods":["GET","HEAD"]},"admins.password.update":{"uri":"admins\/profile\/password\/{user}\/update","methods":["PUT"],"bindings":{"user":"id"}},"admins.profile.edit":{"uri":"admins\/profile\/edit","methods":["GET","HEAD"]},"admins.profile.security":{"uri":"admins\/profile\/security","methods":["GET","HEAD"]},"admins.profile.cursus":{"uri":"admins\/profile\/cursus","methods":["GET","HEAD"]},"admins.podcast.status":{"uri":"admins\/podcast-status","methods":["POST"]},"podcast.show":{"uri":"podcast\/{podcast}","methods":["GET","HEAD"],"bindings":{"podcast":"id"}},"membre.show":{"uri":"member\/{user}","methods":["GET","HEAD"]},"about.index":{"uri":"about","methods":["GET","HEAD"]},"leading.index":{"uri":"leading","methods":["GET","HEAD"]},"organisation.index":{"uri":"organisation","methods":["GET","HEAD"]},"people.index":{"uri":"people","methods":["GET","HEAD"]},"in.house":{"uri":"in-house","methods":["GET","HEAD"]},"select.page":{"uri":"select-page","methods":["GET","HEAD"]},"inquire.page":{"uri":"inquire","methods":["GET","HEAD"]},"keynote.page":{"uri":"keynote","methods":["GET","HEAD"]},"executive.page":{"uri":"executive","methods":["GET","HEAD"]},"app.name":{"uri":"\/","methods":["GET","HEAD"]},"seminar.show":{"uri":"seminar\/{seminar}","methods":["GET","HEAD"],"bindings":{"seminar":"id"}}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
