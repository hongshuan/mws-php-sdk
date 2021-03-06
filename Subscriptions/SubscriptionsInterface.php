<?php

namespace Amazon\MWS\Subscriptions;

interface SubscriptionsInterface
{
    /**
     * Create Subscription
     * Create a new subscription.
     *
     * @param mixed $request array of parameters for CreateSubscription request or CreateSubscription object itself
     * @see CreateSubscriptionInput
     * @return CreateSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function createSubscription($request);


    /**
     * Delete Subscription
     * Delete a subscription.
     *
     * @param mixed $request array of parameters for DeleteSubscription request or DeleteSubscription object itself
     * @see DeleteSubscriptionInput
     * @return DeleteSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function deleteSubscription($request);


    /**
     * Deregister Destination
     * Delete a destination.
     *
     * @param mixed $request array of parameters for DeregisterDestination request or DeregisterDestination object itself
     * @see DeregisterDestinationInput
     * @return DeregisterDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function deregisterDestination($request);


    /**
     * Get Subscription
     * Retrieve subscription information.
     *
     * @param mixed $request array of parameters for GetSubscription request or GetSubscription object itself
     * @see GetSubscriptionInput
     * @return GetSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function getSubscription($request);


    /**
     * List Registered Destinations
     * List all the destinations for the specified seller created by the developer.
     *
     * @param mixed $request array of parameters for ListRegisteredDestinations request or ListRegisteredDestinations object itself
     * @see ListRegisteredDestinationsInput
     * @return ListRegisteredDestinationsResponse
     *
     * @throws SubscriptionsException
     */
    public function listRegisteredDestinations($request);


    /**
     * List Subscriptions
     * List all the subscriptions for the specified seller created by the current developer.
     *
     * @param mixed $request array of parameters for ListSubscriptions request or ListSubscriptions object itself
     * @see ListSubscriptionsInput
     * @return ListSubscriptionsResponse
     *
     * @throws SubscriptionsException
     */
    public function listSubscriptions($request);


    /**
     * Register Destination
     * Create a new destination.
     *
     * @param mixed $request array of parameters for RegisterDestination request or RegisterDestination object itself
     * @see RegisterDestinationInput
     * @return RegisterDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function registerDestination($request);


    /**
     * Send Test Notification To Destination
     * Send a test Notification to the specified destination.
     *
     * @param mixed $request array of parameters for SendTestNotificationToDestination request or SendTestNotificationToDestination object itself
     * @see SendTestNotificationToDestinationInput
     * @return SendTestNotificationToDestinationResponse
     *
     * @throws SubscriptionsException
     */
    public function sendTestNotificationToDestination($request);


    /**
     * Update Subscription
     * Update a subscription.
     *
     * @param mixed $request array of parameters for UpdateSubscription request or UpdateSubscription object itself
     * @see UpdateSubscriptionInput
     * @return UpdateSubscriptionResponse
     *
     * @throws SubscriptionsException
     */
    public function updateSubscription($request);


    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatusRequest
     * @return GetServiceStatusResponse
     *
     * @throws SubscriptionsException
     */
    public function getServiceStatus($request);

}
