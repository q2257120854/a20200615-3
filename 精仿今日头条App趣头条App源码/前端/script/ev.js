(function(window){
	function EventToll(){
		this.eventlistener = {
		};
	}
	EventToll.prototype.on = function(event,callback){
		if(typeof event != 'string' || typeof callback != 'function'){
			return this;
		}
		this.eventlistener[event] = callback;
		return this;
	}

	EventToll.prototype.emit = function(event,data){
		this.eventlistener[event]&&this.eventlistener[event].call(null,data);
	}

	


	function Queue(){
		this.queueArray = [];
		this.recovery = [];
		this.endData = [];
		this.endCallback = null;
	}
	Queue.prototype.add = function(callback){
		if(typeof callback != 'function'){
			return this;
		}
		this.queueArray.unshift(callback);
		return this;
	}
	Queue.prototype.next = function(data){
		if(this.queueArray.length == 0){
			return this;
		}
		var func = this.queueArray.pop();
		this.recovery.unshift(func);
		data&&this.endData.push(data);
		func(this);
		if(this.queueArray.length == 0){
			this.queueArray = this.recovery;
			this.recovery = [];
			this.endCallback&&this.endCallback.apply(null,this.endData);
		}

	}
	Queue.prototype.end = function(callback){
		if(typeof callback != 'function'){
			return this;
		}
		this.endCallback = callback;
		return this;
	}
	Queue.prototype.start = function(){
		return this.next();
	}
	Queue.prototype.relay = function(data){
		var func = this.recovery[0];
		if(!func){
			throw new Error('当前队列没有开始或者已经结束');
			return;
		}
		func(this);
		return this;
	}

	window.Queue = Queue;
	window.EventToll = EventToll;
	window.EventT = new EventToll();
	window.E = new EventToll();

})(window);

