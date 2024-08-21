<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Video
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Video\V1\Room;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Video\V1\Room\Participant\SubscribeRulesList;
use Twilio\Rest\Video\V1\Room\Participant\SubscribedTrackList;
use Twilio\Rest\Video\V1\Room\Participant\PublishedTrackList;
use Twilio\Rest\Video\V1\Room\Participant\AnonymizeList;


/**
 * @property SubscribeRulesList $subscribeRules
 * @property SubscribedTrackList $subscribedTracks
 * @property PublishedTrackList $publishedTracks
 * @property AnonymizeList $anonymize
 * @method \Twilio\Rest\Video\V1\Room\Participant\SubscribedTrackContext subscribedTracks(string $sid)
 * @method \Twilio\Rest\Video\V1\Room\Participant\AnonymizeContext anonymize()
 * @method \Twilio\Rest\Video\V1\Room\Participant\PublishedTrackContext publishedTracks(string $sid)
 */
class ParticipantContext extends InstanceContext
    {
    protected $_subscribeRules;
    protected $_subscribedTracks;
    protected $_publishedTracks;
    protected $_anonymize;

    /**
     * Initialize the ParticipantContext
     *
     * @param Version $version Version that contains the resource
     * @param string $roomSid The SID of the room with the Participant resource to fetch.
     * @param string $sid The SID of the RoomParticipant resource to fetch.
     */
    public function __construct(
        Version $version,
        $roomSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'roomSid' =>
            $roomSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Rooms/' . \rawurlencode($roomSid)
        .'/Participants/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the ParticipantInstance
     *
     * @return ParticipantInstance Fetched ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ParticipantInstance
    {

        $payload = $this->version->fetch('GET', $this->uri);

        return new ParticipantInstance(
            $this->version,
            $payload,
            $this->solution['roomSid'],
            $this->solution['sid']
        );
    }


    /**
     * Update the ParticipantInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ParticipantInstance Updated ParticipantInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ParticipantInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'Status' =>
                $options['status'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ParticipantInstance(
            $this->version,
            $payload,
            $this->solution['roomSid'],
            $this->solution['sid']
        );
    }


    /**
     * Access the subscribeRules
     */
    protected function getSubscribeRules(): SubscribeRulesList
    {
        if (!$this->_subscribeRules) {
            $this->_subscribeRules = new SubscribeRulesList(
                $this->version,
                $this->solution['roomSid'],
                $this->solution['sid']
            );
        }

        return $this->_subscribeRules;
    }

    /**
     * Access the subscribedTracks
     */
    protected function getSubscribedTracks(): SubscribedTrackList
    {
        if (!$this->_subscribedTracks) {
            $this->_subscribedTracks = new SubscribedTrackList(
                $this->version,
                $this->solution['roomSid'],
                $this->solution['sid']
            );
        }

        return $this->_subscribedTracks;
    }

    /**
     * Access the publishedTracks
     */
    protected function getPublishedTracks(): PublishedTrackList
    {
        if (!$this->_publishedTracks) {
            $this->_publishedTracks = new PublishedTrackList(
                $this->version,
                $this->solution['roomSid'],
                $this->solution['sid']
            );
        }

        return $this->_publishedTracks;
    }

    /**
     * Access the anonymize
     */
    protected function getAnonymize(): AnonymizeList
    {
        if (!$this->_anonymize) {
            $this->_anonymize = new AnonymizeList(
                $this->version,
                $this->solution['roomSid'],
                $this->solution['sid']
            );
        }

        return $this->_anonymize;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Video.V1.ParticipantContext ' . \implode(' ', $context) . ']';
    }
}
