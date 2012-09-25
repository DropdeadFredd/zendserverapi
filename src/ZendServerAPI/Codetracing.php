<?php
namespace ZendServerAPI;

class Codetracing extends BaseAPI
{
    /**
     * Implementation of codetracingEnable method
     *
     * @param  boolean                                    $restartNow Restart after method call
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingEnable($restartNow = true)
    {
        $this->request->setAction($this->apiFactory->factory('codetracingEnable', $restartNow));

        return $this->request->send();
    }

    /**
     * Implementation of codetracingDisable method
     *
     * @param  boolean                                    $restartNow Restart after method call
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingDisable($restartNow = true)
    {
        $this->request->setAction($this->apiFactory->factory('codetracingDisable', $restartNow));

        return $this->request->send();
    }

    /**
     * Implementation of codetracingIsEnabled method
     *
     * @return \ZendServerAPI\DataTypes\CodeTracingStatus
     */
    public function codetracingIsEnabled()
    {
        $this->request->setAction($this->apiFactory->factory('codetracingIsEnabled'));

        return $this->request->send();
    }
}
